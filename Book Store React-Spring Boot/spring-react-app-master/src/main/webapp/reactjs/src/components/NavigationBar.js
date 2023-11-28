import React from 'react';
import { Navbar, Nav } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPlusSquare, faList, faUsers } from '@fortawesome/free-solid-svg-icons'; // Import the icons you want to use

function NavigationBar() {
  const navbarStyle = {
    backgroundColor: "#000", // Dark background color
    color: "White",
    minHeight: "100vh", // Adjust to fill the entire viewport height
    display: "flex",
    flexDirection: "column",
    alignItems: "center",
    padding: "20px",
  };

  const linkStyle = {
    margin: "10px 0",
    fontSize: "18px", // Adjust the font size as needed
  };

  const brandStyle = {
    display: "flex",
    alignItems: "center",
    marginBottom: "20px", // Adjust the margin as needed
  };

  const brandImgStyle = {
    marginRight: "10px", 
    borderRadius: "8px",
    
    // Adjust the margin as needed
  };

  return (
    <Navbar style={navbarStyle} variant="light">
      <div style={brandStyle}>
      <img
          src="data:image/jpeg;base64,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"
          width="35"
          height="35"
          alt="brand"
          style={brandImgStyle}
        />
        <Link to={""} className="navbar-brand" style={{ color: "white" ,fontSize: "",}}>
          The Book Vault
        </Link>
      </div>

      <div style={linkStyle}>
        <Link to={"add"} className="nav-link">
          <FontAwesomeIcon icon={faPlusSquare} /> Add Book
        </Link>
      </div>
      <div style={linkStyle}>
        <Link to={"list"} className="nav-link">
          <FontAwesomeIcon icon={faList} /> Book List
        </Link>
      </div>
      <div style={linkStyle}>
        <Link to={"users"} className="nav-link">
          <FontAwesomeIcon icon={faUsers} /> User List
        </Link>
      </div>
    </Navbar>
  );
}

export default NavigationBar;
