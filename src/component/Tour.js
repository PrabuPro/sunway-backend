import React from 'react';
import {CSSTransition, TransitionGroup} from 'react-transition-group';
import './Tour.css';

const Tour = (props) =>{
    if(props.tours.length === 0){
        return (
            <h1>No Tours Found</h1>
        );
    } else {

        const renderTours = key => {
            const title = props.tours[key].title;
            const description = props.tours[key].description;
            const duration = props.tours[key].duration;
            const image = props.tours[key].image;
            return(
                <div key={key} className="card tour-card mt-4">
                    <div className="card-body d-flex">
                        <img src={image} className="img-thumbnail img-responsive tour-image"/>
                        <div className="tour-card-content">
                            <div className="card-title tour-card-title">{title}</div>
                            <div className="card-text tour-card-para">{description}</div>
                            < div className = "button-holder justify-content-between align-items-center" >
                                <h6>{duration} Days</h6>
                                <button type="button" className="btn btn-primary">View Tour</button>
                            </div>
                        </div>
                    </div>
                </div>
            );
        }

        const noRecord = () =>{
            return(
               <div>
                   <h2>No Matching Tours :( </h2>
               </div> 
            );
        }

        const tourItems = Object.keys(props.tours); 
        return(
            <div>
                {props.noRecords ? noRecord() : tourItems.map(renderTours) }
            </div>
        );
    }
}


export default Tour;