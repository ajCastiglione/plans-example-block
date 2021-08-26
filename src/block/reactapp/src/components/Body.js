import React from 'react'

// api data
import data from '../../pricing.json';

export default function Body() {
    console.log(data)
    return (
        <div>
            <h4>Content below coming from:</h4>
            <div dangerouslySetInnerHTML={{ __html: window.attributes.content }} ></div>
        </div>
    )
}
