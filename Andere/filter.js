// app.js
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const database = require('../Database/connection.php');

// 解析请求体
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// 处理搜索请求
app.get('/search', (req, res) => {
    const searchTerm = req.query.term; // 获取搜索关键字
    // 在数据库中执行搜索操作，并获取匹配的结果
    const searchResults = database.searchFunction(searchTerm); // 替换成您的数据库搜索函数
    res.json({ results: searchResults });
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});