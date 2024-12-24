import React, { useState, useEffect } from 'react';
import { BrowserRouter as Router, Route, Routes, Navigate } from 'react-router-dom';
import Navbar from './comp/Navbar';
import Home from './views/Home';
import Offres from './views/Offres';
import Candidatures from './views/Candidatures';
import Login from './comp/Login';
import Dashboard from './comp/Dashboard';
import Register from './comp/Register';

const App = () => {
  const [isAuthenticated, setIsAuthenticated] = useState(false);

  useEffect(() => {
    const token = localStorage.getItem('token');
    if (token) {
      setIsAuthenticated(true);
    }
  }, []);

  return (
    <Router>
      <Navbar isAuthenticated={isAuthenticated} setIsAuthenticated={setIsAuthenticated} />
      <div className="content">
        <Routes>
          <Route 
            path="/login" 
            element={isAuthenticated ? <Navigate to="/" /> : <Login setIsAuthenticated={setIsAuthenticated} />} 
          />
          <Route 
            path="/register" 
            element={isAuthenticated ? <Navigate to="/" /> : <Register />} 
          />

          <Route 
            path="/*" 
            element={
              isAuthenticated ? (
                <Routes>
                  <Route path="/" element={<Home />} />
                  <Route path="/offres" element={<Offres />} />
                  <Route path="/candidatures" element={<Candidatures />} />
                  <Route path="/dashboard" element={<Dashboard />} />
                </Routes>
              ) : (
                <Navigate to="/login" />
              )
            } 
          />
        </Routes>
      </div>
    </Router>
  );
};

export default App;
