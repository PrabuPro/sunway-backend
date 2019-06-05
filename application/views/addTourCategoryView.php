<?php if(isset($_SESSION['logged_in'])) : ?>

<?php if($this->session->logged_in) : ?>

<style>
	.thumbnail-image {
		background-size: cover;
	}

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
	<div class="columns">
		<div class="column is-12">
			
			<section class="hero is-info welcome is-small">
				<div class="hero-body">
					<div class="container">
						<h1 class="title">
							Add Tour Category
						</h1>
					</div>
				</div>
			</section>
			<!-- <section class="hero">
				<div class="columns">
					<div class="column is-8" style="margin-top:30px;">
						<form action="">
                            <h2>Tour Id</h2>
                            <input type="text" class="form-control mb-5">
                            <h4>Suitable For</h4>
                            <div class="field d-flex justify-content-between">
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Romantic Holidays
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Couples + Family
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Couples + Family
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Travelling Solo
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Families With Teenagers/ Older Children
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    Families with kids
                                </label>
                                <label class="checkbox p-2">
                                    <input type="checkbox" value="">
                                    seniors
                                </label>
                            </div>
                        </form>

					</div>
				</div>
			</section> -->

            <div id="root"></div>


		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/babel">

class AddCategory extends React.Component {
    state = {
        tourId:'',
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
    };
    
    // tourIdRef = React.createRef();

    updateId = event => {
        let newId = event.currentTarget.value;
        this.setState({
            tourId: newId
        })
        console.log(this.state.tourId);
    }

    handleSubmit = event => {
        event.preventDefault();
        // console.log(this.state);
        axios.post('http://localhost/sunwayholidays/addCategories', 
                   {tourId: this.state.tourId,
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
                })
            .then(res => { 
                if(res.status == 200){
                    alert('Success!');
                    location.reload();
                }else {
                    alert('Error');
                }
            })
    }

    tourChange = event => {
        console.log(event.target.value);
        this.setState({ [event.target.name]: event.target.value });
    }



    render() {
        return (
    	<section className="hero">
				<div className="columns">
					<div className="column is-8" >
                        <form onSubmit={this.handleSubmit}>
                            <h2>Tour Id</h2>
                            <input type="text" className="form-control mb-5" ref={this.tourIdRef} onChange={this.updateId} />
                            <h4 className="mt-3">Suitable For</h4>
                            <div className="field d-flex justify-content-between">
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="romanticHoliday" onChange={this.tourChange} />
                                    Romantic Holidays
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="couplesFriends" onChange={this.tourChange} />
                                    Couples + Family
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="travellingSolo" onChange={this.tourChange} />
                                    Travelling Solo
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="familiesTeenages" onChange={this.tourChange} />
                                    Families With Teenagers/ Older Children
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="familiesKids" onChange={this.tourChange} />
                                    Families with kids
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="seniors" onChange={this.tourChange} />
                                    seniors
                                </label>
                            </div>
                            <h4 className="mt-3">Interest</h4>
                            <div className="field d-flex justify-content-between">
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="culture" onChange={this.tourChange} />
                                    Culture
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="unescoHeritage" onChange={this.tourChange} />
                                    UNESCO Heritage Site
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="interactWithAnimals" onChange={this.tourChange} />
                                    Interact With Animals
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="wildlifeWatching" onChange={this.tourChange} />
                                    Wildlife Watching
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="natureAndLandscapes" onChange={this.tourChange} />
                                    Nature and Landscapes
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="teaTrails" onChange={this.tourChange} />
                                    Tea Trails
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="relaxingBeachTime" onChange={this.tourChange} />
                                    Relaxing Beach Time
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="colomboCity" onChange={this.tourChange} />
                                    Colombo City
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="ecoLovers" onChange={this.tourChange} />
                                    Eco lovers
                                </label>
                            </div>
                            <h4 className="mt-3">Experience</h4>
                            <div className="field d-flex">
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="localExperience" onChange={this.tourChange} />
                                    Local Experience
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="meetLocals" onChange={this.tourChange} />
                                    Meet Locals
                                </label>
                            </div>
                            <h4 className="mt-3">Beach Stay In</h4>
                            <div className="field d-flex justify-content-between">
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="northernPeninsular" onChange={this.tourChange} />
                                    Northern Peninsular
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="notthEasternCoast" onChange={this.tourChange} />
                                    North Eastern Coast
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="westernCoast" onChange={this.tourChange} />
                                    Western Coast
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="southWesternCoast" onChange={this.tourChange} />
                                    South Western Coast
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="southernCoast" onChange={this.tourChange} />
                                    Southern Coast
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="easternCoast" onChange={this.tourChange} />
                                    Eastern Coast
                                </label>
                            </div>
                            <h4 className="mt-3">Activity Level</h4>
                            <div className="field d-flex justify-content-between">
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="softAdventure" onChange={this.tourChange} />
                                    Soft Adventure
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="activeHoliday" onChange={this.tourChange} />
                                    Active Holiday
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="relaxingHoliday" onChange={this.tourChange} />
                                    Relaxing Holiday
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="leisureDayInBetween" onChange={this.tourChange} />
                                    Leisure Day In-Between
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="midlyActiveHoliday" onChange={this.tourChange} />
                                    Mildly Active Holiday
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="seeAsMuchAsPossible" onChange={this.tourChange} />
                                    See As Much As Possible
                                </label>
                                <label className="checkbox p-2">
                                    <input type="checkbox" value={this.state.tourId} name="relaxingBeachTime" onChange={this.tourChange} />
                                    Relaxing Beach Time
                                </label>
                            </div>
                            <input type="submit" value="Submit" className="button is-info" onChange={this.tourChange} />
                        </form>
                    </div>
				</div>
			</section> 
        );
    }
}

ReactDOM.render(
    <AddCategory />,
    document.getElementById('root')
);
</script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<script>


</script>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script async type="text/javascript" src="<?php echo base_url(); ?>assets/js/form.js"></script>


<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>

<?php else : ?>
<?php redirect('home'); ?>
<?php endif; ?>