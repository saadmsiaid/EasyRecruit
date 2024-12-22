const express = require('express');
const axios = require('axios');
const app = express();

app.use(express.json()); 
app.use('/offres', async (req, res) => {
    try {
        const response = await axios({
            method: req.method,
            url: `http://localhost:8001/api/offres`,
            data: req.body,
        });
        res.status(response.status).json(response.data);
    } catch (error) {
        console.error("Error details:", error.message);
        if (error.response) {
            console.error("Status:", error.response.status);
            console.error("Headers:", error.response.headers);
            console.error("Data:", error.response.data);
        }
        res.status(error.response?.status || 500).json({
            message: 'Error communicating with Offres Service',
        });
    }
});


app.use('/candidatures', async (req, res) => {
    try {
        const response = await axios({
            method: req.method,
            url: `http://localhost:8002/api/candidatures`,
            data: req.body,
        });
        res.status(response.status).json(response.data);
    } catch (error) {
        console.error(error.message);
        res.status(error.response?.status || 500).json({
            message: 'Error communicating with Candidatures Service',
        });
    }
});

app.use('/users', async (req, res) => {
    try {
        const response = await axios({
            method: req.method,
            url: `http://localhost:8003/api/utilisateurs`, 
            data: req.body,
        });
        res.status(response.status).json(response.data);
    } catch (error) {
        console.error(error.message);
        res.status(error.response?.status || 500).json({
            message: 'Error communicating with Utilisateurs Service',
        });
    }
});

app.listen(8000, () => {
    console.log('API Gateway running on http://localhost:8000');
});
