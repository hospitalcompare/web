import React from "react";

const CompareHeart = () => {
    return (
        <svg id="compare_heart"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 30 30">
            <path id="outer-circle" fill="transparent" strokeWidth="2" stroke="#fff"
                  d="M15 1c7.7 0 14 6.3 14 14s-6.3 14-14 14S1 22.7 1 15 7.3 1 15 1z"/>
            <g>
                <path id="wishlist" fill="transparent"
                      d="M18.8 8c-1.3 0-2.6.7-3.3 1.8-.2.2-.3.5-.4.7-.1-.2-.3-.5-.4-.7-.7-1.1-2-1.8-3.3-1.8-2.6.1-4.4 2-4.4 4.4v.1c0 2.8 2.3 4.7 5.7 7.7.6.6 1.3 1.1 1.9 1.7.1.1.3.1.4.1.1 0 .2 0 .3-.1l2.1-1.8c3.2-2.7 5.6-4.7 5.6-7.6.1-2.4-1.7-4.4-4.1-4.6l-.1.1z"/>
            </g>
        </svg>
    )
};

export default CompareHeart;
