import React, { useEffect, useState } from 'react';
import { Card, Button, Row, Col, Container } from 'react-bootstrap';

const OffersView = () => {
  const [offers, setOffers] = useState([]);

  // Simulate fetching data from an API
  useEffect(() => {
    const fetchOffers = async () => {
      const response = await fetch('http://localhost:8000/offres'); // Replace with your actual API endpoint
      const data = await response.json();
      setOffers(data);
    };

    fetchOffers();
  }, []);

  return (
    <Container className="mt-4">
      <Row>
        {offers.map((offer) => (
          <Col key={offer.id} md={4} className="mb-4">
            <Card>
              <Card.Body>
                <Card.Title>{offer.titre}</Card.Title>
                <Card.Text>{offer.description}</Card.Text>
                <Card.Text className="text-muted">
                  Published on: {new Date(offer.date_publication).toLocaleDateString()}
                </Card.Text>
                <Button variant="primary" href={`/offres/${offer.id}`}>
                  View Details
                </Button>
              </Card.Body>
            </Card>
          </Col>
        ))}
      </Row>
    </Container>
  );
};

export default OffersView;
