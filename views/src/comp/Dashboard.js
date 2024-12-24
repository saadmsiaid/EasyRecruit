import React, { useEffect, useState } from 'react';
import axios from 'axios';

const Dashboard = () => {
  const [data, setData] = useState(null);

  useEffect(() => {
    const token = localStorage.getItem('token');

    if (token) {
      axios
        .get('http://localhost:8000/api/dashboard', {
          headers: {
            Authorization: `Bearer ${token}`,
          },
        })
        .then((response) => {
          setData(response.data);
        })
        .catch((err) => {
          console.error(err);
        });
    } else {
      alert('You need to log in first.');
    }
  }, []);

  if (!data) {
    return <p>Loading...</p>;
  }

  return (
    <div>
      <h2>Dashboard</h2>
      <p>Welcome back, {data.name}!</p> 
    </div>
  );
};

export default Dashboard;
