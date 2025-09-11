import { useState } from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import './assets/css/style.css'
import Header from './components/Header'
import Footer from './components/Footer'
import Home from './components/Home'

function App() {
  const [count, setCount] = useState(0)

  return (
    <Router>
      <Header />
      <div className="App">
        <div>
          <a href="https://vite.dev" target="_blank">
            <img src={viteLogo} className="logo" alt="Vite logo" />
          </a>
          <a href="https://react.dev" target="_blank">
            <img src={reactLogo} className="logo react" alt="React logo" />
          </a>
        </div>
        <h1>Vite + React</h1>
        <div className="card">
          <button onClick={() => setCount((count) => count + 1)}>
            count is {count}
          </button>
          <p>
            Edit <code>src/App.jsx</code> and save to test HMR
          </p>
        </div>
        <p className="read-the-docs">
          Click on the Vite and React logos to learn more
        </p>
        <h1>Welcome to Grahasthee E-Commerce</h1>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/shop" element={<Shop />} />
          <Route path="/product/:id" element={<Product />} />
          <Route path="/cart" element={<Cart />} />
          <Route path="/wishlist" element={<Wishlist />} />
          <Route path="/profile" element={<Profile />} />
        </Routes>
      </div>
      <Footer />
    </Router>
  )
}

function Home() {
  return <h1>Home Page</h1>
}
function Shop() {
  return <h1>Shop Page</h1>
}
function Product() {
  return <h1>Product Page</h1>
}
function Cart() {
  return <h1>Cart Page</h1>
}
function Wishlist() {
  return <h1>Wishlist Page</h1>
}
function Profile() {
  return <h1>Profile Page</h1>
}

// Example API call setup (to be replaced with actual endpoints)
export async function fetchProducts() {
  return fetch('http://localhost:8000/api/products')
    .then(res => res.json());
}

export async function fetchCart() {
  return fetch('http://localhost:8000/api/cart')
    .then(res => res.json());
}

export async function fetchWishlist() {
  return fetch('http://localhost:8000/api/wishlist')
    .then(res => res.json());
}

export default App
