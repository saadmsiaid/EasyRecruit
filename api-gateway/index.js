const express = require('express');
const axios = require('axios');
const app = express();


app.get('/api/offres', async (req, res) => {
    try {
        const response = await axios.get('http://offres-service:8001/api/offres');
        res.json(response.data);
    } catch (error) {
        res.status(500).json({ message: 'Error fetching offres' });
    }
});

app.get('/api/candidatures', async (req, res) => {
    try {
        const response = await axios.get('http://candidatures-service:8002/api/candidatures');
        res.json(response.data);
    } catch (error) {
        res.status(500).json({ message: 'Error fetching candidatures' });
    }
});

app.get('/api/utilisateurs', async (req, res) => {
    try {
        const response = await axios.get('http://utilisateurs-service:8003/api/utilisateurs');
        res.json(response.data);
    } catch (error) {
        res.status(500).json({ message: 'Error fetching utilisateurs' });
    }
});

app.listen(8000, () => {
    console.log('API Gateway running on port 8000');
});
