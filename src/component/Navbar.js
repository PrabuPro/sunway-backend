import React from 'react';
import './Navbar.css';
import logo from '../assets/image/logo_main.jpg';


const nav = () =>{
    return(
        <div>
            <div className="row row-bar">
                <div className="container">
                    <nav className="navbar navbar-expand-lg navbar-light justify-content-between">
                <a className="navbar-brand" href="#"><img src={logo} className="img-fluid logo" alt="" /></a>
                <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul className="navbar-nav mr-auto">
                        <li className="nav-item active">
                            <a className="nav-link" href="#">Home <span className="sr-only">(current)</span></a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">Tilor Made </a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">Tours</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">How It Works</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">About Us</a>
                        </li>
                        <li className="nav-item">
                            <a className="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>

                </div>
                
            </div>
        </div>
    );
}

export default nav;