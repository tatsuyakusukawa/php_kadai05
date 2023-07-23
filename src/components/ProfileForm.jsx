    import React, { useState } from 'react';
    import axios from 'axios';

    const StoreForm = () => {
    const [title, setTitle] = useState('');
    const [body, setBody] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();

        try {
        const response = await axios.post('http://localhost:8000/store', {
            title: title,
            body: body,
        });

        // データが正常に登録された場合の処理
        console.log('データが登録されました:', response.data);
        // ここで必要なリダイレクトやフラッシュメッセージなどを行うことができます

        // フォームをリセット
        setTitle('');
        setBody('');
        } catch (error) {
        // エラーハンドリング
        console.error('データの登録に失敗しました:', error);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
        <div>
            <label>
            タイトル:
            <input
                type="text"
                value={title}
                onChange={(e) => setTitle(e.target.value)}
            />
            </label>
        </div>
        <div>
            <label>
            本文:
            <textarea
                value={body}
                onChange={(e) => setBody(e.target.value)}
            />
            </label>
        </div>
        <button type="submit">登録</button>
        </form>
    );
    };

    export default StoreForm;
