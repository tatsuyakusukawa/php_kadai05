import React, { useState, useEffect } from 'react';
import axios from 'axios';



const Lara = () => {
    const [data, setData] = useState([]);

    useEffect(() => {
        const fetchData = async () => {
        try {
            const response = await axios.get('http://localhost:80/api/todo_categories'); // データを取得
            setData(response.data); // 取得したデータをStateに格納
            console.log('データの取得に成功しました:', data);
        } catch (error) {
            console.error('LAraデータの取得に失敗しました:', error);
        }
        };

        fetchData();
    }, []);

    return (
            <div>
            <h1>データの表示</h1>
            <ul>
                {/* 表示 */}
                {data.map((item) => (
                <li key={item.CategoryID}>
                    <p>{item.CategoryName}</p>
                
                </li>
                ))}

            </ul>
            </div>
    );
    };

export default Lara;
