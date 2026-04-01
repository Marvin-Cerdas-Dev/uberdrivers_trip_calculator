# 🚗 UberDrivers Trip Calculator (Costa Rica)

[![Website](https://img.shields.io/badge/Live-WebApp-green)](https://crubercalc.azurewebsites.net/country/cr/)

[![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![Node.js](https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white)](https://nodejs.org/)

A web-based calculator for Uber drivers in Costa Rica to accurately calculate and validate trip earnings.

## 🖥️ Project Overview

**UberDrivers Trip Calculator** is a comprehensive web application specifically designed for Uber drivers in Costa Rica. The tool helps drivers:
- Calculate precise trip earnings
- Verify total trip revenues
- Provide transparent income calculation
- Support decision-making for drivers

## 🔧 Technologies
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Framework: Bootstrap
- Build Tool: Gulp.js
- Deployment: Azure Web Services

## 📦 Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Marvin-Cerdas-Dev/uberdrivers_trip_calculator.git
   ```

2. Requirements:
   - Web server with PHP support
   - Modern web browser
   - Gulp.js (for development)

## 🚀 Local Development

1. Install dependencies:
   ```bash
   npm install
   ```

2. Run Gulp tasks:
   ```bash
   gulp build
   ```

3. Setup local web server to serve PHP files

## ✨ Key Features
- Country-specific Uber earnings calculator with support for 5 service types: X, Planet, Flash, Comfort, and XL
- Stateless, POST-based server-side calculation pipeline via PHP — no database or API layer required
- Responsive design using Bootstrap 5 with custom CSS overrides
- Centralized fare configuration (`config/fares.php`) as a single source of truth for all rate updates
- Transparent earnings breakdown: base fare, per-kilometer and per-minute rates, tolls, extras, and Uber commission (25%)

## 🌐 Live Demo
[UberDrivers Trip Calculator](https://crubercalc.azurewebsites.net/country/cr/index.php)

## 📄 License
**Marvin Cerdas Development License**

Copyright (c) 2024 Marvin Cerdas

Permission is granted to use, copy, modify, and/or distribute this software, subject to the following conditions:

1. Any use, modification, or distribution of this software must provide clear attribution to the original developer, Marvin Cerdas.

2. If this software or substantial portions of it are used in another project, the following attribution must be included in a prominent location (such as README, about page, or credits):
   ```
   Original work by Marvin Cerdas
   UberDrivers Trip Calculator
   https://github.com/Marvin-Cerdas-Dev/uberdrivers_trip_calculator
   ```

3. The software is provided "as is", without warranty of any kind.

4. The original developer retains all intellectual property rights.

## 🤝 Contact
Marvin Cerdas - [GitHub Profile](https://github.com/Marvin-Cerdas-Dev)
