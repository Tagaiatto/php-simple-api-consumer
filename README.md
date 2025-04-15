# 🪙 Bitcoin Price Viewer (Pure PHP + Docker)

This is a simple API consumer built with **pure PHP** (no frameworks), using **Docker** to run a local server. It fetches the current Bitcoin price from the Coindesk API and displays it on a styled page using **Bootstrap**.

---

## 🚀 Features

- 🐘 Pure PHP (no Composer or frameworks)
- 🐳 Docker + Apache (via `php:8.2-apache`)
- 📦 Simple custom router
- 💰 Fetches real-time Bitcoin price
- 🎨 Includes Bootstrap layout (header/footer)
- 🔐 API key stored securely via `.env`

---

## 📂 Project Structure

 ├── app/ 

  │

  └── Controllers/

  │ └── BitcoinController.php 

  ├── core/ 

  │ ├── Router.php 

  │ └── HttpClient.php 

  ├── public/ 

  │ └── index.php 

  ├── routes/ 

  │ └── web.php 

  ├── views/ 

  │ ├── layout/ 

  │ │ ├── header.php 

  │ │ └── footer.php 

  │ └── bitcoin.php 

  ├── Dockerfile 

  ├── docker-compose.yml 

  ├── .env 

  └── README.md




---

## 🔧 Setup

### 1. Clone the project

```
git clone https://github.com/your-username/php-bitcoin-viewer.git
cd php-bitcoin-viewer
```
### 2. Add your API key
```
Create a .env file in the root directory:

API_KEY=your_coindesk_api_key_here
⚠️ Do not commit this file! It is excluded via .gitignore.
```
### 3. Run the app
```
docker-compose up -d --build
The app will be available at:

http://localhost:8080
```
### 🖱️ Usage
```
Visit:

http://localhost:8080/bitcoin
Then click the button to fetch the current BTC price.
```
### 🤝 Contributing
Feel free to fork this project and submit PRs for improvements like:

- Better routing

- Support for more cryptocurrencies

- JS-powered price refresh
