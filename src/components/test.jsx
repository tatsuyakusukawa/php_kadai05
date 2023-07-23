

// Reactコンポーネント内でデータを取得する例
import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { auth } from '../firebase';

const YourComponent = () => {
    const [data, setData] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
        try {
            const response = await axios.get('http://localhost:8000/index'); // データを取得
            setData(response.data); // 取得したデータをStateに格納
            console.log('データの取得に成功しました:', data);
        } catch (error) {
            console.error('データの取得に失敗しました:', error);
        }
        };

        fetchData();
    }, []);

    return (
            <div>
                {/* signOutボタン */}

                <button onClick={() => auth.signOut()}>Sign Out</button>
            <h1>データの表示</h1>
            <ul>
                {/* 表示 */}
                {data.map((item) => (
                <li key={item.id}>
                    <p>{item.title}</p>
                    <p>{item.body}</p>
                    {/* 削除ボタン */}
                    <button
                    onClick={async () => {
                        try {
                        const response = await axios.delete(
                            `http://localhost:8000/delete/${item.id}`
                        );
                        console.log('データの削除に成功しました:', response.data);
                        } catch (error) {
                        console.error('データの削除に失敗しました:', error);
                        }
                    }}
                    >
                    削除
                    </button>

                
                </li>
                ))}

            </ul>
            </div>
    );
    };

export default YourComponent;
