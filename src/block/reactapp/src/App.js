import React from 'react'

// Local modules
import Header from './components/Header';
import Body from './components/Body';
import Footer from './components/Footer';

// Styles
import './styles/app.scss';

export default function App() {
    console.log(window.attributes)
    return (
        <div className="app">
            <Header />
            <Body />
            <Footer />
        </div>
    )
}
