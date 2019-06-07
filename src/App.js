import React, {Component} from 'react';
import Nav from'./component/Navbar';
import Filter from './component/Filter';
import Tour from './component/Tour';
import Footer from './component/Footer';
import axios from 'axios';
import './App.css';
import loading from './assets/image/search.gif';


class App extends Component {

  state = {
    isLoading: true,
    noRecords: false,
    tours: [],
    romanticHoliday: '',
    couplesFriends: '',
    travellingSolo: '',
    familiesTeenages: '',
    familiesKids: '',
    seniors: '',
    culture: '',
    unescoHeritage: '',
    interactWithAnimals: '',
    wildlifeWatching: '',
    natureAndLandscapes: '',
    teaTrails: '',
    relaxingBeachTime: '',
    colomboCity: '',
    ecoLovers:'',
    localExperience:'',
    meetLocals:'',
    northernPeninsular: '',
    notthEasternCoast: '',
    westernCoast: '',
    southWesternCoast: '',
    southernCoast: '',
    easternCoast: '',
    softAdventure: '',
    activeHoliday: '',
    relaxingHoliday: '',
    leisureDayInBetween: '',
    midlyActiveHoliday: '',
    seeAsMuchAsPossible: '',
    relaxingBeachTime: ''

  }

  componentWillMount(){
    axios.get('http://localhost/sunwayholidays/filterTour')
        .then(res => {
            this.setState({
              tours: res.data,
              isLoading:false
            }) 
        });
  }

  componentDidUpdate(prevProps, prevState){
    
  }

  handleInputChange = (event) => {
    const value = event.target.checked === true ? event.target.value : '' ;
    const name = event.target.name;

    this.setState({
      isLoading: true,
      [name]: value
    }, () => {
      if (!this.state.romanticHoliday && !this.state.couplesFriends && !this.state.travellingSolo && !this.state.familiesTeenages && !this.state.familiesKids && !this.state.seniors && !this.state.culture && !this.state.unescoHeritage && !this.state.interactWithAnimals && !this.state.wildlifeWatching && !this.state.natureAndLandscapes && !this.state.teaTrails && !this.state.relaxingBeachTime && !this.state.colomboCity && !this.state.ecoLovers && !this.state.localExperience && !this.state.meetLocals && !this.state.northernPeninsular && !this.state.notthEasternCoast && !this.state.westernCoast && !this.state.southWesternCoast && !this.state.southernCoast && !this.state.easternCoast && !this.state.softAdventure && !this.state.activeHoliday && !this.state.relaxingHoliday && !this.state.leisureDayInBetween && !this.state.midlyActiveHoliday && !this.state.seeAsMuchAsPossible && !this.state.relaxingBeachTime) {
        axios.get('http://localhost/sunwayholidays/filterTour')
          .then(res => {
            this.setState({
              tours: res.data,
              isLoading:false,
              noRecords:false
            })
          });
      } else {
        //setting suitable-for category 
        if (this.state.romanticHoliday || this.state.couplesFriends || this.state.travellingSolo || this.state.familiesTeenages || this.state.familiesKids || this.state.seniors) {
          var suitable = "suitable-for";
        }
        if (this.state.culture || this.state.unescoHeritage || this.state.interactWithAnimals || this.state.wildlifeWatching || this.state.natureAndLandscapes || this.state.teaTrails || this.state.relaxingBeachTime || this.state.colomboCity || this.state.ecoLovers) {
          var interests = "interests";
        }
        if (this.state.localExperience || this.state.meetLocals) {
          var experience = "experience";
        }
        if (this.state.northernPeninsular || this.state.notthEasternCoast || this.state.westernCoast || this.state.southWesternCoast || this.state.southernCoast || this.state.easternCoast) {
          var beachStayIn = "beachStayIn";
        }
        if (this.state.softAdventure || this.state.activeHoliday || this.state.relaxingHoliday || this.state.leisureDayInBetween || this.state.midlyActiveHoliday || this.state.seeAsMuchAsPossible || this.state.relaxingBeachTime) {
          var activityLevel = "activityLevel";
        }
        axios.post('http://localhost/sunwayholidays/filterTourPost',
          { suitableFor: suitable ? suitable : '',
            interests: interests ? interests : '',
            experience: experience ? experience : '',
            beachStayIn: beachStayIn ? beachStayIn : '',
            activityLevel: activityLevel ? activityLevel : '',
            romanticHoliday: this.state.romanticHoliday,
            couplesFriends: this.state.couplesFriends,
            travellingSolo: this.state.travellingSolo,
            familiesTeenages: this.state.familiesTeenages,
            familiesKids: this.state.familiesKids,
            seniors: this.state.seniors,
            culture: this.state.culture,
            unescoHeritage: this.state.unescoHeritage,
            interactWithAnimals: this.state.interactWithAnimals,
            wildlifeWatching: this.state.wildlifeWatching,
            natureAndLandscapes: this.state.natureAndLandscapes,
            teaTrails: this.state.teaTrails,
            relaxingBeachTime: this.state.relaxingBeachTime,
            colomboCity: this.state.colomboCity,
            ecoLovers: this.state.ecoLovers,
            localExperience: this.state.localExperience,
            meetLocals: this.state.meetLocals,
            northernPeninsular: this.state.northernPeninsular,
            notthEasternCoast: this.state.notthEasternCoast,
            westernCoast: this.state.westernCoast,
            southWesternCoast: this.state.southWesternCoast,
            southernCoast: this.state.southernCoast,
            easternCoast: this.state.easternCoast,
            softAdventure: this.state.softAdventure,
            activeHoliday: this.state.activeHoliday,
            relaxingHoliday: this.state.relaxingHoliday,
            leisureDayInBetween: this.state.leisureDayInBetween,
            midlyActiveHoliday: this.state.midlyActiveHoliday,
            seeAsMuchAsPossible: this.state.seeAsMuchAsPossible,
            relaxingBeachTime: this.state.relaxingBeachTime
            
          },{
             headers: {
               'Content-Type': 'application/x-www-form-urlencoded'
             }
          }).then(res => {
            if (res.data.status == "NO_RECORDS"){
              this.setState({
                noRecords: true,
                isLoading: false,
              });
            }else{
            this.setState({
              tours: res.data,
              isLoading: false,
              noRecords: false,
            });  
            }
          }).catch(error => console.log(error));
      }
    });
  }

  render(){
    return (
      <div>
        <Nav/>
        <div className="container">
            <div className="row body-section pt-5">
                <div className="col-4">
                  <Filter 
                      romanticHoliday={this.state.romanticHoliday}
                      couplesFriends={this.state.couplesFriends}
                      handleInputChange={this.handleInputChange}/>
              </div>
              <div className="col-8">
              <h2>Results</h2>
              { this.state.isLoading ? 
                <div className="loading">
                  <img src={loading} className="loading-img" alt=""/>
                <h3>Searching Your Tours...</h3>
                </div> 
                : <Tour tours={this.state.tours} noRecords={this.state.noRecords}/>}
              </div> 
            </div>    
        </div>
        <Footer/>
      </div>
  );
  
}
  
}

export default App;
