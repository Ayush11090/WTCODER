import React from 'react'
import {Jumbotron} from 'react-bootstrap'

function Welcome(props) {
    return (
<Jumbotron style={{ backgroundColor: 'rgba(255, 255, 255, 0)', fontSize: '30px' }} className="text-black">
    <p style={{ fontSize: '70px', fontFamily: 'Times New Roman',fontWeight: 'bold'}}>{props.heading}</p>
</Jumbotron>

    );
} 

export default Welcome
