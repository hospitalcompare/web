import React from 'react';
import CompareIcon from "../../svg/CompareIcon";

const EmptyCol = () => {
    const heartStyles = {
            width: "14px",
            height: "14px"
    };

    return (
        <div className="col col-empty h-100">
            <div className="col-inner">
                <div className="col-header border-bottom-0">
                    <p className="text-center px-2">Selected Hospital<br/>
                        will appear here.</p>
                    <p className="text-center px-2">
                        Add more hospitals to your
                        Shortlist by clicking the&nbsp;
                        <CompareIcon style={heartStyles}
                                     stroke={"#037098"}
                                     strokeWidth={"50px"}
                                     fill={"transparent"}
                        />
                    </p>
                </div>
            </div>
        </div>
    );
};

export default EmptyCol;
