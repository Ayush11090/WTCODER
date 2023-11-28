import React from 'react';
import './App.css';
import NavigationBar from './components/NavigationBar';
import { Container, Row, Col } from 'react-bootstrap';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Welcome from './components/Welcome';
import BookList from './components/BookList';
import Book from './components/Book';
import UserList from './components/UserList';

function App() {
  const marginTop = {
    marginTop: "60px",
  };

  const containerStyle = {
    
    height: '100vh',
    
  };

  const heading = "Welcome to Book Vault";
  const quote = "Good friends, a sleepy conscience: this is the ideal life.";
  const footer = "Mark Twain";


  const leftNavStyle = {
    width: "250px",
    height: "100%",
    backgroundColor: "#0000",
    color: "#fff",
    position: "fixed",
    top: 0,
    left: 0,
  };

  const mainContentStyle = {
    backgroundImage: 'url("https://img.freepik.com/free-photo/row-colorful-books_1101-285.jpg?1&w=1380&t=st=1697132708~exp=1697133308~hmac=bc18787555257f6e47d54150d5e478e73b0593d29c3c2b1fd70383791e14f7e0")',
    marginLeft: "250px",
    backgroundRepeat: "no-repeat",
    backgroundSize: "cover", 
   color:"black",

     // Adjust the width of the left navigation bar
  };

  return (
    <Router>
      <div style={leftNavStyle}>
        <NavigationBar />
      </div>
      <div style={mainContentStyle}>
        <Container style={containerStyle}>
          <Row>
            <Col lg={12} style={marginTop}>
              <Switch>
                <Route path="/" exact component={() => <Welcome heading={heading} quote={quote} footer={footer}/>}/>
                <Route path="/add" exact component={Book} />
                <Route path="/edit/:id" exact component={Book} />
                <Route path="/list" exact component={BookList} />
                <Route path="/users" exact component={UserList} />
              </Switch>
            </Col>
          </Row>
        </Container>
      </div>
    </Router>
  );
}

export default App;
