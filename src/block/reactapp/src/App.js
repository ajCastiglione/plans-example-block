import React, { useEffect } from 'react'

// Local modules
import Header from './components/Header';
import Body from './components/Body';
import Footer from './components/Footer';

// Styles
// import './styles/app.scss';

export default function App() {
    useEffect(() => {
        const func = () => {
            fetch('https://jsonplaceholder.typicode.com/todos/1')
                .then(response => response.json())
                .then(json => console.log(json))

        }

        func()
    }, [])
    return (
        <div className="app">
            <Header />
            <Body />
            <Footer />
        </div>
    )
}
