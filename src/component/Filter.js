import React,{Component} from 'react';
import './Filter.css';

class Filter extends Component {

    render() {
        return(
        <div>
           <div className="card">
                <h6 className="card-title filter-title">Filter Section</h6>
                <hr className="card-divider"/>
                <div className="card-body">
                <form action="" method="post">
                    <h6 className="card-subtitle mb-2 text-muted">Suitable for</h6>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="romanticHoliday" name="romanticHoliday" checked={this.props.romanticHoliday} value="romanticHoliday" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="romanticHoliday">Romantic Holidays</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="couplesFriends" name="couplesFriends" checked={this.props.couplesFriends} value="couplesFriends" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="couplesFriends">Couples + Family</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="travellingSolo" name="travellingSolo" checked={this.props.travellingSolo} value="travellingSolo" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="travellingSolo">Travelling Solo</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="familiesTeenages" name="familiesTeenages" checked={this.props.familiesTeenages} value="familiesTeenages" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="familiesTeenages">Families With Teenagers/ Older Children</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="familiesKids" name="familiesKids" checked={this.props.familiesKids} value="familiesKids" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="familiesKids">Families with kids</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="seniors" name="seniors" checked={this.props.seniors} value="seniors" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="seniors">seniors</label>
                        </div>
                        
                    <h6 className="card-subtitle mb-2 text-muted pt-4">Interests</h6>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="culture" name="culture" checked={this.props.culture} value="culture" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="culture">Culture</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="unescoHeritage" name="unescoHeritage" checked={this.props.unescoHeritage} value="unescoHeritage" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="unescoHeritage">UNESCO Heritage Site</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="interactWithAnimals" name="interactWithAnimals" checked={this.props.interactWithAnimals} value="interactWithAnimals" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="interactWithAnimals">Interact With Animals</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="wildlifeWatching" name="wildlifeWatching" checked={this.props.wildlifeWatching} value="wildlifeWatching" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="wildlifeWatching">Wildlife Watching</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="natureAndLandscapes" name="natureAndLandscapes" checked={this.props.natureAndLandscapes} value="natureAndLandscapes" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="natureAndLandscapes">Nature and Landscapes</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="teaTrails" name="teaTrails" checked={this.props.teaTrails} value="teaTrails" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="teaTrails">Tea Trails</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="relaxingBeachTime" name="relaxingBeachTime" checked={this.props.relaxingBeachTime} value="relaxingBeachTime" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="relaxingBeachTime">Relaxing Beach Time</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="colomboCity" name="colomboCity" checked={this.props.colomboCity} value="colomboCity" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="colomboCity">Colombo City</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="ecoLovers" name="ecoLovers" checked={this.props.ecoLovers} value="ecoLovers" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="ecoLovers">Eco lovers</label>
                        </div>
                    <h6 className="card-subtitle mb-2 text-muted pt-4">Experience</h6>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="localExperience" name="localExperience" checked={this.props.localExperience} value="localExperience" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="localExperience">Local Experience</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="meetLocals" name="meetLocals" checked={this.props.meetLocals} value="meetLocals" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="meetLocals">Meet Locals</label>
                        </div>
                    <h6 className="card-subtitle mb-2 text-muted pt-4">Beach Stay In</h6>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="northernPeninsular" name="northernPeninsular" checked={this.props.northernPeninsular} value="northernPeninsular" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="northernPeninsular">Northern Peninsular</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="notthEasternCoast" name="notthEasternCoast" checked={this.props.notthEasternCoast} value="notthEasternCoast" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="notthEasternCoast">North Eastern Coast</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="westernCoast" name="westernCoast" checked={this.props.westernCoast} value="westernCoast" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="westernCoast">Western Coast</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="southWesternCoast" name="southWesternCoast" checked={this.props.southWesternCoast} value="southWesternCoast" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="southWesternCoast">South Western Coast</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="southernCoast" name="southernCoast" checked={this.props.southernCoast} value="southernCoast" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="southernCoast">Southern Coast</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="easternCoast" name="easternCoast" checked={this.props.easternCoast} value="easternCoast" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="easternCoast">Eastern Coast</label>
                        </div>
                    <h6 className="card-subtitle mb-2 text-muted pt-4">Activity Level</h6>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="softAdventure" name="softAdventure" checked={this.props.softAdventure} value="softAdventure" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="softAdventure">Soft Adventure</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="activeHoliday" name="activeHoliday" checked={this.props.activeHoliday} value="activeHoliday" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="activeHoliday">Active Holiday</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="relaxingHoliday" name="relaxingHoliday" checked={this.props.relaxingHoliday} value="relaxingHoliday" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="relaxingHoliday">Relaxing Holiday</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="leisureDayInBetween" name="leisureDayInBetween" checked={this.props.leisureDayInBetween} value="leisureDayInBetween" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="leisureDayInBetween">Leisure Day In-Between</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="midlyActiveHoliday" name="midlyActiveHoliday" checked={this.props.midlyActiveHoliday} value="midlyActiveHoliday" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="midlyActiveHoliday">Mildly Active Holiday</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="seeAsMuchAsPossible" name="seeAsMuchAsPossible" checked={this.props.seeAsMuchAsPossible} value="seeAsMuchAsPossible" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="seeAsMuchAsPossible">See As Much As Possible</label>
                        </div>
                        <div className="custom-control custom-checkbox">
                            <input type="checkbox" className="custom-control-input" id="relaxingBeachTime" name="relaxingBeachTime" checked={this.props.relaxingBeachTime} value="relaxingBeachTime" onChange={this.props.handleInputChange} />
                            <label className="custom-control-label" htmlFor="relaxingBeachTime">Relaxing Beach Time</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        );      
    }
}

export default Filter;