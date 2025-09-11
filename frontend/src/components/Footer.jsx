import React from 'react';

const Footer = () => (
  <footer id="footer" className="mt-5">
      <div className="container">
        <div className="row d-flex flex-wrap justify-content-between py-5">
          <div className="col-md-3 col-sm-6">
            <div className="footer-menu footer-menu-001">
              <div className="footer-intro mb-4">
                <a href="/">
                  <img src={mainLogo} alt="logo" />
                </a>
              </div>
              <p>Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum diam in. Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit.</p>
              {/* Social links can be added here using SVGs or icon libraries */}
            </div>
          </div>
          {/* ...other footer columns... */}
        </div>
        <div className="border-top py-4">
          <div className="container">
            <div className="row">
              <div className="col-md-6 d-flex flex-wrap">
                <div className="shipping">
                  <span>We ship with:</span>
                  <img src={arctIcon} alt="icon" />
                  <img src={dhlLogo} alt="icon" />
                </div>
                <div className="payment-option">
                  <span>Payment Option:</span>
                  <img src={visaCard} alt="card" />
                  <img src={paypalCard} alt="card" />
                  <img src={masterCard} alt="card" />
                </div>
              </div>
              <div className="col-md-6 text-end">
                <p>© Copyright 2022 Kaira. All rights reserved. Design by <a href="https://templatesjungle.com" target="_blank" rel="noopener noreferrer">TemplatesJungle</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
);

export default Footer;
