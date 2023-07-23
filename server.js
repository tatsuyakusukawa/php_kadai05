const {PrismaClient} = require('@prisma/client');
const express = require('express');
const cors = require('cors');
const passport = require('passport');
const GoogleStrategy = require('passport-google-oauth20').Strategy;
const app = express();
const port = process.env.PORT || 8000;
const prisma = new PrismaClient();
app.use(express.json());
app.use(cors());
app.use(passport.initialize());



// Postの処理
    app.post('/store', async(req, res) => {
        const { title, body} = req.body;
        const posts = await prisma.posts.create({
            data: {
                title: title,
                body: body,
            },
        });
        res.json(posts);
    });


// Getの処理
    app.get('/index', async(req, res) => {
        const posts = await prisma.posts.findMany();
        res.json(posts);
    });

    // IDを指定してGetする処理
    app.get('/index/:id', async(req, res) => {
        const { id } = req.params;
        const posts = await prisma.posts.findUnique({
            where: {
                id: Number(id),
            },
        });
        res.json(posts);
    });

// Putの処理
    app.put('/update/:id', async(req, res) => {
        const { id } = req.params;
        const { title, body } = req.body;
        const posts = await prisma.posts.update({
            where: {
                id: Number(id),
            },
            data: {
                title: title,
                body: body,
            },
        });
        res.json(posts);
    });

    app.delete('/delete/:id', async (req, res) => {
            const { id } = req.params;
        
            try {
            // まず、紐づいているコメントを削除する
            const comment = await prisma.comment.deleteMany({
                where: {
                    post: {
                        id: Number(id),
                    },
                },
            });
        
            // コメントが削除されたら、投稿を削除する
            const posts = await prisma.posts.delete({
                where: {
                id: Number(id),
                },
            });
        
            // 削除が成功した場合
            res.json({ message: '削除が成功しました。' });
            } catch (error) {
            // エラーハンドリング
            console.error('削除に失敗しました:', error);
            res.status(500).json({ error: '削除に失敗しました。' });
            }
        });
        





    // PostIDに対するcommentの送信
    app.post('/comment/:id', async(req, res) => {
        const { id } = req.params;
        const { text } = req.body;
        try {
            // "Posts" テーブルから投稿を取得
            const post = await prisma.posts.findUnique({
            where: {
                id: Number(id),
            },
            });
        
            // 投稿が存在する場合のみコメントを作成
            if (post) {
            const comment = await prisma.comment.create({
                data: {
                body: text,
                post: {
                    connect: {
                    id: post.id,
                    },
                },
                },
            });
            
            // 成功した場合の処理
            res.status(200).json({ message: 'コメントが作成されました', comment });
            } else {
            // 投稿が見つからなかった場合の処理
            res.status(404).json({ error: '指定された投稿が見つかりません' });
            }
        } catch (error) {
            // エラーが発生した場合の処理
            console.error(error);
            res.status(500).json({ error: 'コメントの作成中にエラーが発生しました' });
        }
    });


    express.Router().get('/', (req, res) => {
        res.send('Hello World!');
    });
    




    app.listen(port, () => console.log(`Server running on port ${port}`));

    app.get('/auth/google', passport.authenticate('google', {
        scope: ['https://www.googleapis.com/auth/plus.login']
    }));
    