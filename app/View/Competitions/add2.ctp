<!-- File: /app/View/Competitions/add.ctp -->

<!-- Begin page content -->
<div class="container fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="page-header">
				<h2>Fill out the form below to start your competition.</h2>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<form class="well form-horizontal" id="createCompetitionForm" method="POST" action="confirmCompetition.php">
				<fieldset>  
          			<legend>Competition Details (required):</legend>  	
					<div class="control-group">
						<label class="control-label">Song Name:</label>
						<div class="controls">
							<div style="padding-top:5px;"><?php echo $trackdetails->title; ?> <a href="selectTrack.php">(change)</a></div>
						</div>	
					</div>
					<div class="control-group">
						<label for="competitionType" class="control-label">What do you need?</label>
						<div class="controls">
							<select name="competitionType" class="input-xlarge" required="">
								<option value="">What do you need?</option>
								<option value="lyrics">Just lyrics</option>
								<option value="melody">Just melody</option>
								<option value="lyrics+melody">Lyrics and Melody</option>
							</select>
						</div>	
					</div>
					<div class="control-group">
						<label for="enddate" class="control-label">When do you need it?</label>
						<div class="controls">
					 		<input required="" placeholder="When do you need it?" class="input-xlarge" type="text" name="enddate" id="datepicker1">
						</div>	
					</div>
					<div class="control-group">
						<label for="prize" class="control-label">How much will you pay?</label>
						<div class="controls">
							<input type="text" required="" placeholder="How much will you pay?" name="prize" id="prize" class="input-xlarge" style="width:243px">
							<p class="help-block">You are charged 10% to start your competition, the remainder is charged when you choose your winner.</p>  
						</div>	
					</div>
				</fieldset>

				<fieldset>  
          			<legend>Other details (recommended):</legend>  	

					<div class="control-group">
						<label for="genre" class="control-label">Genre:</label>
						<div class="controls">
							<select name="genre" class="input-xlarge">
								<option value="" selected="selected">Select the song genre...</option>
                                <optgroup label="Alternative">
                                    <option value="Alternative">Alternative</option>
                                    <option value="Alternative Rock">Alternative Rock</option>
                                    <option value="College Rock">College Rock</option>
                                    <option value="Experimental Rock">Experimental Rock</option>
                                    <option value="Goth Rock">Goth Rock</option>
                                    <option value="Grunge">Grunge</option>
                                    <option value="Hardcore Punk">Hardcore Punk</option>
                                    <option value="Hard Rock">Hard Rock</option>
                                    <option value="Indie Rock">Indie Rock</option>
                                    <option value="New Wave">New Wave</option>
                                    <option value="Progressive Rock">Progressive Rock</option>
                                    <option value="Punk">Punk</option>
                                </optgroup>
                                <optgroup label="Anime">
                                    <option value="Anime">Anime</option>
                                </optgroup>
                                <optgroup label="Blues">
                                    <option value="Blues">Blues</option>
                                    <option value="Acoustic Blues">Acoustic Blues</option>
                                    <option value="Chicago Blues">Chicago Blues</option>
                                    <option value="Classic Blues">Classic Blues</option>
                                    <option value="Contemporary Blues">Contemporary Blues</option>
                                    <option value="Country Blues">Country Blues</option>
                                    <option value="Delta Blues">Delta Blues</option>
                                    <option value="Electric Blues">Electric Blues</option>
                                </optgroup>
                                <optgroup label="Children’s Music">
                                    <option value="Children’s Music">Children’s Music</option>
                                    <option value="Lullabies">Lullabies</option>
                                    <option value="Sing-Along">Sing-Along</option>
                                    <option value="Stories">Stories</option>
                                </optgroup>
                                <optgroup label="Classical">
                                    <option value="Classical">Classical</option>
                                    <option value="Avant-Garde">Avant-Garde</option>
                                    <option value="Baroque">Baroque</option>
                                    <option value="Chamber Music">Chamber Music</option>
                                    <option value="Chant">Chant</option>
                                    <option value="Choral">Choral</option>
                                    <option value="Classical Crossover">Classical Crossover</option>
                                    <option value="Early Music">Early Music</option>
                                    <option value="High Classical">High Classical</option>
                                    <option value="Impressionist">Impressionist</option>
                                    <option value="Medieval">Medieval</option>
                                    <option value="Minimalism">Minimalism</option>
                                    <option value="Modern Composition">Modern Composition</option>
                                    <option value="Opera">Opera</option>
                                    <option value="Orchestral">Orchestral</option>
                                    <option value="Renaissance">Renaissance</option>
                                    <option value="Romantic">Romantic</option>
                                    <option value="Wedding Music">Wedding Music</option>
                                </optgroup>
                                <optgroup label="Comedy">
                                    <option value="Comedy">Comedy</option>
                                    <option value="Novelty">Novelty</option>
                                    <option value="Standup Comedy">Standup Comedy</option>
                                </optgroup>
                                <optgroup label="Country">
                                    <option value="Country">Country</option>
                                    <option value="Alternative Country">Alternative Country</option>
                                    <option value="Americana">Americana</option>
                                    <option value="Bluegrass">Bluegrass</option>
                                    <option value="Contemporary Bluegrass">Contemporary Bluegrass</option>
                                    <option value="Contemporary Country">Contemporary Country</option>
                                    <option value="Country Gospel">Country Gospel</option>
                                    <option value="Honky Tonk">Honky Tonk</option>
                                    <option value="Outlaw Country">Outlaw Country</option>
                                    <option value="Traditional Bluegrass">Traditional Bluegrass</option>
                                    <option value="Traditional Country">Traditional Country</option>
                                    <option value="Urban Cowboy">Urban Cowboy</option>
                                </optgroup>
                                <optgroup label="Dance">
                                    <option value="Dance">Dance</option>
                                    <option value="Breakbeat">Breakbeat</option>
                                    <option value="Dubstep">Dubstep</option>
                                    <option value="Exercise">Exercise</option>
                                    <option value="Garage">Garage</option>
                                    <option value="Hardcore">Hardcore</option>
                                    <option value="House">House</option>
                                    <option value="Jungle/Drum’n'bass">Jungle/Drum’n'bass</option>
                                    <option value="Techno">Techno</option>
                                    <option value="Trance">Trance</option>
                                </optgroup>
                                <optgroup label="Disney">
                                    <option value="Disney">Disney</option>
                                </optgroup>
                                <optgroup label="Easy Listening">
                                    <option value="Easy Listening">Easy Listening</option>
                                    <option value="Bop">Bop</option>
                                    <option value="Lounge">Lounge</option>
                                    <option value="Swing">Swing</option>
                                </optgroup>
                                <optgroup label="Electronic">
                                    <option value="Electronic">Electronic</option>
                                    <option value="Ambient">Ambient</option>
                                    <option value="Downtempo">Downtempo</option>
                                    <option value="Electronica">Electronica</option>
                                    <option value="IDM/Experimental">IDM/Experimental</option>
                                    <option value="Industrial">Industrial</option>
                                </optgroup>
                                <optgroup label="Enka">
                                    <option value="Enka">Enka</option>
                                </optgroup>
                                <optgroup label="French Pop">
                                    <option value="French Pop">French Pop</option>
                                </optgroup>
                                <optgroup label="German Folk">
                                    <option value="German Folk">German Folk</option>
                                </optgroup>
                                <optgroup label="German Pop">
                                    <option value="German Pop">German Pop</option>
                                </optgroup>
                                <optgroup label="Fitness &amp; Workout">
                                    <option value="Fitness &amp; Workout">Fitness &amp; Workout</option>
                                </optgroup>
                                <optgroup label="Hip-Hop/Rap">
                                    <option value="Hip-Hop/Rap">Hip-Hop/Rap</option>
                                    <option value="Alternative Rap">Alternative Rap</option>
                                    <option value="Dirty South">Dirty South</option>
                                    <option value="East Coast Rap">East Coast Rap</option>
                                    <option value="Gangsta Rap">Gangsta Rap</option>
                                    <option value="Hardcore Rap">Hardcore Rap</option>
                                    <option value="Hip-Hop">Hip-Hop</option>
                                    <option value="Latin Rap">Latin Rap</option>
                                    <option value="Old School Rap">Old School Rap</option>
                                    <option value="Rap">Rap</option>
                                    <option value="Underground Rap">Underground Rap</option>
                                    <option value="West Coast Rap">West Coast Rap</option>
                                </optgroup>
                                <optgroup label="Holiday">
                                    <option value="Holiday">Holiday</option>
                                    <option value="Chanukah">Chanukah</option>
                                    <option value="Christmas">Christmas</option>
                                    <option value="Christmas: Children’s">Christmas: Children’s</option>
                                    <option value="Christmas: Classic">Christmas: Classic</option>
                                    <option value="Christmas: Classical">Christmas: Classical</option>
                                    <option value="Christmas: Jazz">Christmas: Jazz</option>
                                    <option value="Christmas: Modern">Christmas: Modern</option>
                                    <option value="Christmas: Pop">Christmas: Pop</option>
                                    <option value="Christmas: R&amp;B">Christmas: R&amp;B</option>
                                    <option value="Christmas: Religious">Christmas: Religious</option>
                                    <option value="Christmas: Rock">Christmas: Rock</option>
                                    <option value="Easter">Easter</option>
                                    <option value="Halloween">Halloween</option>
                                    <option value="Holiday: Other">Holiday: Other</option>
                                    <option value="Thanksgiving">Thanksgiving</option>
                                </optgroup>
                                <optgroup label="Indie Pop">
                                    <option value="Indie Pop">Indie Pop</option>
                                </optgroup>
                                <optgroup label="Industrial">
                                    <option value="Industrial">Industrial</option>
                                </optgroup>
                                <optgroup label="Inspirational – Christian &amp; Gospel">
                                    <option value="Inspirational – Christian &amp; Gospel">Inspirational – Christian &amp; Gospel</option>
                                    <option value="CCM">CCM</option>
                                    <option value="Christian Metal">Christian Metal</option>
                                    <option value="Christian Pop">Christian Pop</option>
                                    <option value="Christian Rap">Christian Rap</option>
                                    <option value="Christian Rock">Christian Rock</option>
                                    <option value="Classic Christian">Classic Christian</option>
                                    <option value="Contemporary Gospel">Contemporary Gospel</option>
                                    <option value="Gospel">Gospel</option>
                                    <option value="Christian &amp; Gospel">Christian &amp; Gospel</option>
                                    <option value="Praise &amp; Worship">Praise &amp; Worship</option>
                                    <option value="Southern Gospel">Southern Gospel</option>
                                    <option value="Traditional Gospel">Traditional Gospel</option>
                                </optgroup>
                                <optgroup label="Instrumental">
                                    <option value="Instrumental">Instrumental</option>
                                    <option value="March (Marching Band)">March (Marching Band)</option>
                                </optgroup>
                                <optgroup label="J-Pop">
                                    <option value="J-Pop">J-Pop</option>
                                    <option value="J-Rock">J-Rock</option>
                                    <option value="J-Synth">J-Synth</option>
                                    <option value="J-Ska">J-Ska</option>
                                    <option value="J-Punk">J-Punk</option>
                                </optgroup>
                                <optgroup label="Jazz">
                                    <option value="Jazz">Jazz</option>
                                    <option value="Avant-Garde Jazz">Avant-Garde Jazz</option>
                                    <option value="Big Band">Big Band</option>
                                    <option value="Contemporary Jazz">Contemporary Jazz</option>
                                    <option value="Cool">Cool</option>
                                    <option value="Crossover Jazz">Crossover Jazz</option>
                                    <option value="Dixieland">Dixieland</option>
                                    <option value="Fusion">Fusion</option>
                                    <option value="Hard Bop">Hard Bop</option>
                                    <option value="Latin Jazz">Latin Jazz</option>
                                    <option value="Mainstream Jazz">Mainstream Jazz</option>
                                    <option value="Ragtime">Ragtime</option>
                                    <option value="Smooth Jazz">Smooth Jazz</option>
                                    <option value="Trad Jazz">Trad Jazz</option>
                                </optgroup>
                                <optgroup label="K-Pop">
                                    <option value="K-Pop">K-Pop</option>
                                </optgroup>
                                <optgroup label="Karaoke">
                                    <option value="Karaoke">Karaoke</option>
                                </optgroup>
                                <optgroup label="Kayokyoku">
                                    <option value="Kayokyoku">Kayokyoku</option>
                                </optgroup>
                                <optgroup label="Latino">
                                    <option value="Latino">Latino</option>
                                    <option value="Alternativo &amp; Rock Latino">Alternativo &amp; Rock Latino</option>
                                    <option value="Baladas y Boleros">Baladas y Boleros</option>
                                    <option value="Brazilian">Brazilian</option>
                                    <option value="Contemporary Latin">Contemporary Latin</option>
                                    <option value="Latin Jazz">Latin Jazz</option>
                                    <option value="Pop Latino">Pop Latino</option>
                                    <option value="Raíces">Raíces</option>
                                    <option value="Reggaeton y Hip-Hop">Reggaeton y Hip-Hop</option>
                                    <option value="Regional Mexicano">Regional Mexicano</option>
                                    <option value="Salsa y Tropical">Salsa y Tropical</option>
                                </optgroup>
                                <optgroup label="New Age">
                                    <option value="New Age">New Age</option>
                                    <option value="Environmental">Environmental</option>
                                    <option value="Healing">Healing</option>
                                    <option value="Meditation">Meditation</option>
                                    <option value="Nature">Nature</option>
                                    <option value="Relaxation">Relaxation</option>
                                    <option value="Travel">Travel</option>
                                </optgroup>
                                <optgroup label="Opera">
                                    <option value="Opera">Opera</option>
                                </optgroup>
                                <optgroup label="Pop">
                                    <option value="Pop">Pop</option>
                                    <option value="Adult Contemporary">Adult Contemporary</option>
                                    <option value="Britpop">Britpop</option>
                                    <option value="Pop/Rock">Pop/Rock</option>
                                    <option value="Soft Rock">Soft Rock</option>
                                    <option value="Teen Pop">Teen Pop</option>
                                </optgroup>
                                <optgroup label="R&amp;B/Soul">
                                    <option value="R&amp;B/Soul">R&amp;B/Soul</option>
                                    <option value="Contemporary R&amp;B">Contemporary R&amp;B</option>
                                    <option value="Disco">Disco</option>
                                    <option value="Doo Wop">Doo Wop</option>
                                    <option value="Funk">Funk</option>
                                    <option value="Motown">Motown</option>
                                    <option value="Neo-Soul">Neo-Soul</option>
                                    <option value="Quiet Storm">Quiet Storm</option>
                                    <option value="Soul">Soul</option>
                                </optgroup>
                                <optgroup label="Reggae">
                                    <option value="Reggae">Reggae</option>
                                    <option value="Dancehall">Dancehall</option>
                                    <option value="Dub">Dub</option>
                                    <option value="Roots Reggae">Roots Reggae</option>
                                    <option value="Ska">Ska</option>
                                </optgroup>
                                <optgroup label="Rock">
                                    <option value="Rock">Rock</option>
                                    <option value="Adult Alternative">Adult Alternative</option>
                                    <option value="American Trad Rock">American Trad Rock</option>
                                    <option value="Arena Rock">Arena Rock</option>
                                    <option value="Blues-Rock">Blues-Rock</option>
                                    <option value="British Invasion">British Invasion</option>
                                    <option value="Death Metal/Black Metal">Death Metal/Black Metal</option>
                                    <option value="Glam Rock">Glam Rock</option>
                                    <option value="Hair Metal">Hair Metal</option>
                                    <option value="Hard Rock">Hard Rock</option>
                                    <option value="Metal">Metal</option>
                                    <option value="Jam Bands">Jam Bands</option>
                                    <option value="Prog-Rock/Art Rock">Prog-Rock/Art Rock</option>
                                    <option value="Psychedelic">Psychedelic</option>
                                    <option value="Rock &amp; Roll">Rock &amp; Roll</option>
                                    <option value="Rockabilly">Rockabilly</option>
                                    <option value="Roots Rock">Roots Rock</option>
                                    <option value="Singer/Songwriter">Singer/Songwriter</option>
                                    <option value="Southern Rock">Southern Rock</option>
                                    <option value="Surf">Surf</option>
                                    <option value="Tex-Mex">Tex-Mex</option>
                                </optgroup>
                                <optgroup label="Singer/Songwriter">
                                    <option value="Singer/Songwriter">Singer/Songwriter</option>
                                    <option value="Alternative Folk">Alternative Folk</option>
                                    <option value="Contemporary Folk">Contemporary Folk</option>
                                    <option value="Contemporary Singer/Songwriter">Contemporary Singer/Songwriter</option>
                                    <option value="Folk-Rock">Folk-Rock</option>
                                    <option value="New Acoustic">New Acoustic</option>
                                    <option value="Traditional Folk">Traditional Folk</option>
                                </optgroup>
                                <optgroup label="Soundtrack">
                                    <option value="Soundtrack">Soundtrack</option>
                                    <option value="Foreign Cinema">Foreign Cinema</option>
                                    <option value="Musicals">Musicals</option>
                                    <option value="Original Score">Original Score</option>
                                    <option value="Soundtrack">Soundtrack</option>
                                    <option value="TV Soundtrack">TV Soundtrack</option>
                                </optgroup>
                                <optgroup label="Spoken Word">
                                    <option value="Spoken Word">Spoken Word</option>
                                </optgroup>
                                <optgroup label="Vocal">
                                    <option value="Vocal">Vocal</option>
                                    <option value="Standards">Standards</option>
                                    <option value="Traditional Pop">Traditional Pop</option>
                                    <option value="Vocal Jazz">Vocal Jazz</option>
                                    <option value="Vocal Pop">Vocal Pop</option>
                                </optgroup>
                                <optgroup label="World">
                                    <option value="World">World</option>
                                    <option value="Africa">Africa</option>
                                    <option value="Afro-Beat">Afro-Beat</option>
                                    <option value="Afro-Pop">Afro-Pop</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Cajun">Cajun</option>
                                    <option value="Caribbean">Caribbean</option>
                                    <option value="Celtic">Celtic</option>
                                    <option value="Celtic Folk">Celtic Folk</option>
                                    <option value="Contemporary Celtic">Contemporary Celtic</option>
                                    <option value="Drinking Songs">Drinking Songs</option>
                                    <option value="Europe">Europe</option>
                                    <option value="France">France</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Indian Pop">Indian Pop</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Japanese Pop">Japanese Pop</option>
                                    <option value="Klezmer">Klezmer</option>
                                    <option value="Middle East">Middle East</option>
                                    <option value="North America">North America</option>
                                    <option value="Polka">Polka</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South America">South America</option>
                                    <option value="Traditional Celtic">Traditional Celtic</option>
                                    <option value="Worldbeat">Worldbeat</option>
                                    <option value="Zydeco">Zydeco</option>
                                </optgroup>
							</select>
						</div>	
					</div>

					<div class="control-group">
						<label for="description" class="control-label">Description:</label>
						<div class="controls">
							<textarea name="description" rows="3" class="input-xlarge" placeholder="Provide a brief description of the style of lyrics you're after."></textarea>
						</div>	
					</div>

					<div class="control-group">
						<label for="inspiration" class="control-label">Inspiration:</label>
						<div class="controls">
							<textarea name="inspiration" rows="3" class="input-xlarge" placeholder="Provide any inspiration the writer should use as a guide e.g. Artists, Songs, Styles, Stories, Themes..."></textarea>
						</div>	
					</div>
					<div class="control-group">
						<div class="controls">
							<label for="terms" class="checkbox">
								<input required="" name="terms" type="checkbox" value="agreed">
								Agree to the <a href="#">Terms &amp; Conditions</a>.
							</label>
						</div>	
					</div>
				</fieldset>
				<div class="control-group">
					<div class="controls">
						<input type="submit" class="btn btn-primary" value="Submit"/>	
						<button onclick="javascript:doCancel('home.php');" class="btn btn-secondary" type="button">Cancel</button>	
					</div>	
				</div>
                <input type="hidden" name="trackselection" value="<?php echo $selectedTrack; ?>" />
			</form>
		</div>
	</div>
</div>