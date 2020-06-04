import React from 'react';

const EmptyCol = () => {
    return (
        <div className="col col-empty h-100">
            <div className="col-inner">
                <div className="col-header border-bottom-0">
                    <p className="text-center px-2">Selected Hospital<br/>
                        will appear here.</p>
                    <p className="text-center px-2">
                        Add more hospitals to your
                        Shortlist by clicking the&nbsp;
                        <img width="14" height="12" src="/images/icons/heart.svg"
                             alt="Heart icon"/>
                    </p>
                </div>
            </div>
        </div>
    );
};

export default EmptyCol;
