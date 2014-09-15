<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

		<!-- Reveal/Hide inserted archival documents in text -->
        <script>        
          jQuery(function($){
            $(".doc-show").each(function () {
				$(this).on("click", "span.slide", function(){
				  $(this)
					.closest(".doc-show")
					  .find(".toggle")
					  .toggle("slow");
				});
			});
          });
        </script>
		<!-- Slideshow with and without next/previous arrows -->
       <script>
        $(document).ready(function () {
            $(".vanallen").slick({
                dots: true,
                autoplay: true,
                arrows: false
            });
			$(".book").slick({
				dots: true,
				autoplay: false,
				arrows: true
			});
        });
        </script>
		<!-- Pullquote to clone content and display next to parent paragraph -->
        <script>
		jQuery(function ($) {
			$(document).ready(function () {
				$('.pull').each(function () {
					$(this).clone()
						.removeClass('pull')
						.addClass('pulledquote')
						.prependTo($(this).parent('p'));
				});
			});
		});
        </script>
		<!-- Fact Boxes as aside to Slide to reveal content -->
        <script>
        $(document).ready(function(){
          $(".fb-caption").click(function(){
            $(this).children(".caption").slideToggle(1000);
          });
        });
        </script>

        <script type="text/javascript">

        //DEFINE PATH TO MP3 HERE. 
        //load in dynamically from external source
        var src = "files/ExplorerI_8022_Track02_streaming.mp3";
    </script>
		
        <!-- Table of Contents -->
    <body onload="init()"> 
        <ul id="toc" class="sticklr">
            <li>
                <a href="#" class="icon-toc" title="Table of Contents"></a>

                <ul>

                    <li class="sticklr-title">
                        <a href="#countdown">Countdown to Explorer I</a>
                    </li>
                    <li><a href="#sputnik">Sputnik beats America into space</a></li>
                    <li><a href="#wwii">World War II Rocketeers</a></li>
                    <li><a href="#smartweapon">America's first smart weapon to the rescue</a></li>
                    <li><a href="#cosmicrays">So, what are cosmic rays?</a></li>
                    <li><a href="#iowa">Return to Iowa</a></li>

                </ul>

                <ul>

                    <li class="sticklr-title">
                        <a href="#launch">Launch to Discovery</a>
                    </li>
                    <li><a href="#moons">Making artificial moons</a></li>
                    <li><a href="#days">Give us 90 days</a></li>
                    <li><a href="#warroom">The War Room wait</a></li>
                    <li><a href="#bird">"We've got the bird"</a></li>
                    <li><a href="#mystery">The mystery in the gaps</a></li>
                    <li><a href="#satellite">Satellite with a memory</a></li>
                    <li><a href="#music">The music of discovery</a></li>
                    <li><a href="#radiation">Radiation belts ring the Earth</a></li>
                    <li><a href="#starwars">Explorer IV - Star wars mission</a>

                </ul>

                <ul>

                    <li class="sticklr-title">
                        <a href="#legacyofexplorer">From Earth to Interstellar Space - Legacy of Explorer I</a>
                    </li>
                    <li><a href="#chorus">Chorus of space history -  Listen to Explorer's data tapes</a></li>
                    <li><a href="#stormshelter">Storm shelter for our "cyberelectric cocoon"</a></li>
                    <li><a href="#accelerator">Accelerator in the belly of the belts</a></li>
                    <li><a href="#interstellar">Unchartered territory - Voyager 1 explores interstellar space</a></li>
                    <li><a href="#heavens">Catching the heavens whistling back</a></li>
                    <li><a href="#remapping">Remapping the solar system</a></li>
                    <li><a href="#pioneers">Pioneers: First ambassadors to the outer planets</a></li>
                    <li><a href="#family">Space family reunion</a></li>
                    <li><a href="#legacy">Fusion - The ultimate legacy</a></li>

                </ul>                    
                                
            </li>            
        </ul>
				
				
	<!-- invisable for now
        <div id="nav-expand">&nbsp;</div>
    -->
        
        
    <!-- Main Narrative -->    
        <div id="container">
            <div id="section-1" class="section image image0 bg-fixed" style="background-image: url(/vanallen/files/original/6d001f65d3460937856ff92109742dab.jpg);">
			<!--<h2 id="header-1" class="animated fadeInUp">Explorer I</h2> --></div>
            <div class="header"><header id="title" class="section text"><h3>The mission and the data tapes reveal the first discovery of the Space Age.</h3></header></div>
			<div class="banner"> 
			   <div id="left"></div>
			   <div id="center">
					<blockquote class="bi-line">The successful orbiting of <sname>Explorer I</sname> is one of the landmarks in the technical and scientific history of the human race. Its instrumentation revealed the existence of radiation belts around the Earth and opened a massive new field of scientific exploration in space. It inspired an entire generation of young men and women in the United States to higher achievement and propelled the Western World into the Space Age.” James Van Allen, March 31, 1970</blockquote>
				<!--[if lt IE 7]>
					<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
				<![endif]-->

				</div>
				<div id="right"></div>
			</div>

        <section class="doc-show section text"><h2>Introduction</h2>                
            <article class="text-container">
                <p><sname>Explorer I</sname> lifted off at Cape Canaveral at <span class="slide">10:48:16 on Jan. 31, 1958</span><div class="toggle initiallyHidden"><img alt="Rocket on Launch Pad with Explorer payload" src="/vanallen/files/fullsize/bb98b3ff62583e2a934ac5808dbc28fa.jpg"></div>a mission hastily salvaged to redeem American honour, launched in the shadow of two <sname>Sputniks</sname> already in orbit. Both had beat the U.S into space. The <sname>Explorer</sname> satellite emerged from a sidelined mission that, sanctioned earlier, could have reached orbit a year before the <sname>Sputniks</sname> launched. <span class="pull">It took flight with a cosmic ray detector invented by physicist James Van Allen with his graduate students in the basement of the University of Iowa’s 1910 physics building.</span> Van Allen candidly called this extraordinary mission a “shakedown” operation that succeeded on “fool’s luck.” Clearly even he didn’t expect the instrumentation to reveal the first discovery of the space age – the existence of the Earth’s radiation belts that set the course for remapping the solar system. But the achievement was obvious by the time he reflected on the space age in March, 1970.
                </p>
            <aside class="image"><img alt="The Explorer 1 team, from left to right: William Pickering, James Van Allen, and Wernher von Braun, holding the replica triumphantly above their heads." src="/vanallen/files/fullsize/c2573e328bf803baa79d07ca8003f14b.jpg"><p class="caption">The Explorer 1 team, from left to right: William Pickering, James Van Allen, and Wernher von Braun, holding the replica.</p></aside>
                 <p><sname>Explorer I</sname> transmitted data about cosmic rays to a global picket fence of radio receivers that tuned in on the satellite signal as it flew over Tokyo, Lima, Antigua, Havana, Nigeria, Singapore, the Jet Propulsion Laboratory’s Codolock station, Patrick Air Force Base in Florida and the San Gabriel Radio Club in California. Data poured in, recorded on 694 Scotch reel-to-reel magnetic audio tapes. NASA didn’t exist yet. The U.S. Army steered <sname>Explorer I</sname> into space with a Jupiter C rocket but the data tapes shipped to Iowa City and Van Allen’s basement laboratory.
				</p>
				<p>The deluge of tapes arrived in metal canisters and cardboard sleeves, labelled with the collection time and location. Graduate student George Ludwig, a key participant in building the cosmic ray detector, logged 120 pages of data from the <sname>Explorer I</sname> tapes. The cosmic ray counts from space rose and fell with the rising and falling pitches in a staccato concert of tones on the tapes. But Ludwig riddled the log with entry upon frustrating entry that read “no data” where gaps in the recordings bristle with static. Listen to them yourself on this website. And then remember that the gaps played the music of discovery to just the right listeners. With immense courage and interpretive ingenuity, Van Allen and his team found – not in the data but in the gaps - the totally unexpected phenomenon of the radiation belts. The data tapes aren’t merely a record of that first discovery in space history. They are space history. They are the original and only record of <sname>Explorer I</sname>’s calls home. 
				</p>
				<aside class="audio"><p>Audio from Explorer I</p>
                    <!-- preloader -->
                    <div id="loader"></div>

                    <!-- the player -->
                    <div id="content" class="content">
                        <div id="player">
                            <div id="playBtn" class="button playBtn"></div>
                            <div id="labels">
                                <label id="song">Tape 8022, Track 02</label><br />                
                            </div>
                            <div id="track">
                                <div id="progress"></div>
                                <div id="thumb"></div>
                            </div>
                        </div>
                    </div>
                </aside>
				<aside class="in-text"><img alt="Photograph of San Diego test reel-to-reel magnetic tap from May 8, 1960" src="/vanallen/files/square_thumbnails/21f788b0a7f40c52666834530b812c44.jpg"><p class="caption">Test reel from San Diego May 8, 1960</p></aside>
				<p>This is the story of <sname>Explorer I</sname>, the radiation belts and the effort to preserve the data tapes. The 694 <sname>Explorer I</sname> tapes and those from numerous other early missions lined shelves for half a century in the basement of the old physics building, now MacLean Hall. MacLean and four other buildings surround Iowa’s stately Old Capitol on the hilltop Pentacrest of the campus. Still, during the devastating floods of 2008, puddles collected on the floor of an old particle accelerator chamber where the tapes were archived and some of them began to mold. Now, restored and newly digitized, the tapes will play the chorus of the early space age for generations to come. You may be among the first to hear some of these tapes. Pressed by deadlines for more instruments on other space missions, the frantic pace escalated in the basement warren. Van Allen saw no reason to plow through every data tape. He moved on to the new data from the next mission.
				</p>
            </article>
        </section>
		<div id="section-1" class="section image image0 bg-fixed" style="background-image: url(/vanallen/files/original/6cbec108390fffc97b714b1698f6fd18.png);">
			<!--<h2 id="header-1" class="animated fadeInUp">Countdown to Explorer I</h2> --></div>
        <section class="doc-show section text" id="countdown">
         <header><h2>Countdown to Explorer I</h2></header>
            <article class="text-container" id="sputnik"><header><h3><sname>Sputnik</sname> beats American into Space</h3></header>
                <p>Shocked Americans listened to <sname>Sputnik</sname>’s A-flat beep – beep – beep on ham radios and news broadcasts for the first time on Oct. 4, 1957. People caught glimpses with their naked eyes of the silvery polished sphere orbiting above them. They marveled - and cringed. What kind of surveillance could the little artificial moon capture? What weapons might come next?
                </p>
                <aside class="image"><img alt="Image taken from Les Meredith Expedition scrapbook, depicts the expedition ship on water" src="/vanallen/files/fullsize/d760caac86d1df1dbad9b42628ca3a77.jpg"><p class="caption">Meredith Expedition Photos 1953-55</p></aside>
                <p>University of Iowa physicist James Van Allen was sailing south toward Antartica on the Navy ice breaker USS Glacier that day. The Glacier opened its deck to Van Allen’s rockoons, his balloon-launched rockets that kept him in space exploration on a shoe-string college budget. The quirky but highly efficient hybrid meant stringing surplus rockets from surplus Skyhook weather balloons. Carried upward some 10 miles by balloons filled with helium on the deck, Van Allen launched the rockets remotely via radio at atmospheric heights with far less air resistance. From there the rockets could reach altitudes of about 60 miles, close to double the target range of the 52 Loki rockets he cached for the voyage at a cost of about $320 per assembly, not counting travel and freight. Of course there were some challenges. The rockets wouldn’t fire in the cold and Van Allen had to wrap them in an insulating sleeve and tuck a 32-ounce can of heated juice in the firing box to solve the problem. But the altitudes meant Van Allen could continue to explore the streams of cosmic rays hurling toward Earth from across the galaxy. He and grad student Larry Cahill launched a rockoon from near the equator that afternoon, the flawless rockoon flight Number 76. 
                </p>
				<br/>
				<div class="vanallen">
                    <div><img alt="slide of several expediation ships on water, photo taken from bow of ship" src="/vanallen/files/square_thumbnails/0258afa60b198ccea4e07409d0ba0f3f.jpg"></div>
                    <div><img alt="Photo of men wrangling a rackoon balloon on the ship platform" src="/vanallen/files/square_thumbnails/e91628ca48f2796c06664ef0014e5199.jpg"></div>
                    <div><img alt="Men stretching the rackoon balloon prior to filling and launch" src="/vanallen/files/square_thumbnails/8c4717208196f0a9163ba1402dbd1ef1.jpg"></div>
                    <div><img alt="Two men inspecting the rackoon rocket before attaching it to the balloon" src="/vanallen/files/square_thumbnails/1decd61da5b29c50615e41eab11ceada.jpg"></div>
					<div><img alt="Five men watch as they launch a rackoon rocket" src="/vanallen/files/square_thumbnails/d1d7954dfbb4b6cc634e1b8736d4a29a.jpg"></div>
                </div>
                <br/>
                <p>In the time it took Van Allen to go below deck to his makeshift lab and write the mission assessment in his field log, the world changed forever. Cahill burst in with the news of <sname>Sputnik</sname>. Van Allen, Cahill and ship officers quickly found <sname>Sputnik</sname>’s signature beep and pooled equipment to chart the signal and confirm that it came from a satellite in orbit. They measured the Doppler shift, the rise and fall of the frequency of <sname>Sputnik</sname>’s beep as it approached and passed overhead, the same shift that accounts for the change in tone of a train whistle as the train heads away. 
                </p>
                <p><sname>Sputnik</sname>’s Doppler shift measured from the ship matched perfectly with altitude the Russians reported for <sname>Sputnik</sname>. Van Allen wired his confirmation to the scientific community meeting at an international gathering in Washington, D.C. The next day, he returned to his field log. The field logs filled an entire shelf of brown-backed ledgers in Van Allen’s Iowa City office. <span class="pull">With hundreds of entries dating back to the 1940s, only one storms beyond impartial scientific observations and that one entry is the 17-page appraisal of <sname>Sputnik</sname>.</span> “Yesterday night – the 4th  -was very exciting for me (as well as for the civilized world in general,” he begins. “Brilliant achievement!” But then he lambasts the U.S. debacle that squandered an easy victory to reach orbit first. 
                </p>
            <aside class="in-text"><img alt="Three Russian men celebrate the successful launch of Sputnik by clinking their glasses together in a toast" src="/vanallen/files/fullsize/65c673b0c264e2b1ef4d0333e4e61307.jpg"><p class="caption">Russians celebrating the successful launch of <sname>Sputnik</sname></p></aside>
                <p>While an ocean separated Van Allen from the shared furor across America, his graduate student George Ludwig stood in the middle of it. Ludwig gathered with scientists from around the world for five days of meetings for the International Geophysical Year and then joined everyone at a cocktail party hosted by the Soviet Embassy. While the guests sipped vodka and feasted on caviar, New York Times science reporter Walter Sullivan was summoned to the phone and the Washington bureau chief told him <sname>Sputnik</sname> was orbiting overhead. Sullivan informed IGY vice president Lloyd Berkner of the news. Berkner climbed on a chair, called the revelers to order and announced the <sname>Sputnik</sname> triumph. Reporters poured into the embassy, a citadel of secrecy where news now flowed as freely as the drinks. <sname>Sputnik</sname> literally meant “companion to the Earth,” adding a bit of poetry to the technological milestone.   
                </p>
				<aside class="image"><img alt="Image of Sputnik's compendum which looks like a silver ball with 4 long antennae" src="/vanallen/files/fullsize/6713b784121535ede9ef36fc6137a0da.jpg"><p class="caption"><sname>Sputnik I</sname> compendum</p></aside>
                <p>By the time the IGY was first envisioned in 1950, scientists had been promising each other for years that it was time to launch a satellite. IGY needed a crown jewel for the year-long program of international research. Organizers threw down the gauntlet, calling for a satellite to orbit the Earth and igniting the space race. There were only two contenders for this first lap of the race – the U.S and the Soviet Union. Americans complacently assumed that the U.S. would prevail. Van Allen knew as few others did that America had held the winning hand – and then bet it away on the wrong rocket.
                </p>
                <p>Cut off from home, Van Allen didn’t know that a political firestorm was resurrecting the orphaned space mission that he, space visionary Wernher von Braun and CalTech’s Jet Propulsion Laboratory turned into the <sname>Explorer I</sname> mission. 
                </p>
            </article>
            <article class="text-container" id="wwii"><header><h3>World War II Rocketeers</h3></header>
                <p>Von Braun, the son of a baron with a gift for rocket-making, decided he wanted to explore space when he was 12 years old and never turned back. He joined a popular rocket club as a  young engineering student in Berlin and his technical flair soon caught the attention of the German military. When the Nazis took over Germany, they commandeered von Braun’s talents and then arrested him in their motivational plan to redirect his sights from space launches to more down to earth weapons. He and his rocket team created the massive V-2 rockets that terrorized London and Antwerp. As the Russians closed in on the underground rocket plant at Nordhausen, von Braun shuffled through conflicting orders to justify an imaginary rocket mission for himself, half his rocket staff and their families and as many papers as he could transport in a truck caravan that moved west in the dead of night to be “captured” by the Americans.  When the Americans moved in on Nordhausen later, they found tools still on the ground and 100 rockets in various stages of completion beneath the bright lights of a ghost town. The rockets and documents filled 300 freight cars for transfer to White Sands Proving Grounds in New Mexico and the rocketeers settled under house arrest at Fort Bliss in El Paso where Texas steaks became an instant hit. The other half of von Braun’s rocket team landed in Russia. Now both groups raced to build ballistic missiles, unleashing the Cold War once the Soviets developed their own atom bomb in 1949.
                </p>
                <p>Testing on the V-2 began at once with General Electric and von Braun working together to reassemble and build parts under Army supervision at White Sands. The actual nose cone cavity that could hold a payload of weapons wasn’t needed and Army brass decided to invite a group of renegade scientists eager to load their instruments in a rocket and bring experiments into space. Most researchers wanted nothing to do with vehicles that might crash land carrying a precious cargo of detectors, scintillators and cameras. They preferred to stick to research with a graceful ride in a balloon even though the V-2 could reach altitudes that human beings had never touched before. <span class="pull">Among the renegades, Van Allen raised his hand and got a seat for his cosmic rays detectors on the first V-2 test flight on April 16, 1946.</span> Sure enough, as the rocket lifted, it began to veer off course and von Braun radioed a fuel cut-off command that sent it hurtling to the ground. Van Allen shrugged and returned to his home base of the Applied Physics Laboratory in Silver Spring, Md., to rebuild. He already had a lot of experience with this sort of thing - he too had been building weapons during World War II.
                </p>
            </article>
            <article class="text-container" id="smartweapon"><header><h3>America's first smart weapon to the rescue</h3></header>
                <p>With a freshly minted Ph.D. in nuclear physics, Van Allen headed to the Department of Terrestrial Magnetism of the Carnegie Institution in Washington, D.C., and soon joined the war effort at the fledgling Applied Physics Laboratory created at Johns Hopkins University in Maryland.
                </p>
				<aside class="image"><p class="caption">Mr. Eberhard Reese, Major General J.B. Medaris, Dr. Wernher von Braun and Dr. Ernst Stuhlinger (sitting) and Mr. W.A. Mrazak and Dr. Walter Haeussermenn (standing) around the to size prototype model of Explorer I</p><img alt="Mr. Eberhard Reese, Major General J.B. Medaris, Dr. Wernher von Braun and Dr. Ernst Stuhlinger (sitting) and Mr. W.A. Mrazak and Dr. Walter Haeussermenn (standing) around the to size prototype model of Explorer I" src="/vanallen/files/fullsize/4c15d605d68c9687dce65a280d28637b.jpg"></aside>
                <p>Many young nuclear physicists found themselves recruited to the secret Manhattan Project at Los Alamos in New Mexico to build the atom bomb. Van Allen started work with an equally secret corps inventing America’s first smart weapon, a proximity fuze for the antiaircraft guns in the South Pacific. The shipboard guns shot missiles with time fuses – fire them and the missiles exploded after a designated interval whether or not a target was in range.
                </p>
                <p>But the proximity fuze was a “smart” weapon encasing a miniature radio. It transmitted a signal and, if an aircraft target was in range, the signal radioed back to the fuze to fire it. Development of a radio that could stand up to a missile blast presented enormous challenges. Van Allen tested fuze after fuze but tiny wire filaments needed for the vacuum tubes in the radio shattered every time with the force of firing.  In an era before transistors and semi-conductors, vacuum tubes were critical to controlling electrical signals. Van Allen decided the filaments needed a shock absorber and he replaced the rigid wires with metal springs. The spring-loaded vacuum tubes in the proximity fuze held together and the Navy enlisted Lt. James Van Allen and sent him off to the South Pacific to demonstrate the new weapons to the gunnery officers.
                </p>
                <p>Yellowing wartime orders neatly filed in a folder show Van Allen hopscotching across the Pacific from ship to ship to “sell” the fuze gunnery officer by gunnery officer. But the gunners wanted nothing to do with the new weapon at first. Even when their tried and true timed fuses didn’t hit anything, they at least gave off a comforting explosion. With no target in sight, the proximity fuzed missiles plummeted silently into the ocean. But the furious barrage of enemy aircraft strikes during the Battle of the Philippine Sea on June 19-20, 1944, tested the proximity fuze and proved its might. It gave gunners a six times better chance of hitting an enemy aircraft and they brought down 425 planes in those two days – 75 percent of the air power massed against them.
                </p>
				<aside class="image"><img alt="Front cover of Space Explorers published by the Jet Propulsion Laboratory" src="/vanallen/files/fullsize/f51ea71bb5ae00030ed47386af66026c.jpg"><p class="caption">Front cover of <i>Space Explorers</i> published by the Jet Propulsion Laboratory</p></aside>
                <p>Van Allen’s knowledge of creating devices that could hold up to a missile launch, his acceptance of the failed launches that came with the territory of rocketry and his ability to design simple, reliable detectors gave him and a handful of others the skills combined with dogged determination to begin space exploration at White Sands. His temerity paid off. On July 29, 1947, on the 30th U.S. flight of a V-2 rocket, Van Allen’s counters hit a plateau where the rising cosmic ray counts steadied and dropped just before they collided with the upper atmosphere.
                </p>
                <p>“Dip at about 100 seconds has appeared before in a counter,” he wrote in his log. “May be real!”
                </p>
                <p>The counts fell off at about 31 miles above the Earth, where Van Allen found a steady stream of cosmic ray particles, a plateau that marked a very real ceiling in the atmosphere for incoming cosmic radiation. 
                </p>
            </article>
            <article class="text-container" id="cosmicrays"><header><h3>So, what are cosmic rays?</h3></header>
                <p>Ray guns and x-ray vision dominate countless plots in science fiction but cosmic rays are a physical fact, carrying the fingerprints of some of the most cataclysmic forces in the universe. When aging stars begin to run out of fuel, they collapse toward their cores and finally explode into a supernova, with shock waves powerful enough to strip the nucleus from an atom, accelerate it to near light speed and hurl it across the galaxy. Viennese physicist Victor Hess, took a newly invented detector nearly a mile above the Earth in a balloon in 1912 and he found radiation levels there some four times as intense as those at the surface. American physicist Robert Millikan later coined the phrase cosmic rays, theorizing that the source of ionizing radiation that rose in intensity with altitude must arise from beyond our solar system and even beyond our galaxy. 
                </p>
				<aside class="audio"><p>Composition commemorating the anniversary of the discovery of the Radiation Belts</p>
                    <!-- preloader -->
                    <div id="loader"></div>

                    <!-- the player -->
                    <div id="content" class="content">
                        <div id="player">
                            <div id="playBtn" class="button playBtn"></div>
                            <div id="labels">
                                <label id="song">Final Drift 1989</label><br />                
                            </div>
                            <div id="track">
                                <div id="progress"></div>
                                <div id="thumb"></div>
                            </div>
                        </div>
                    </div>
                </aside>
                <p>Geophysicist Scott Forbush’s global measurements of cosmic rays at the Department of Terrestrial Magnetism fascinated Van Allen. He admired the older man with his shock of white hair, his prism-thick glasses and his mean hand at poker. Forbush became Van Allen’s mentor as a debate simmered between rival scientists over cosmic rays. Many of them believed that some 30-plus miles of blue sky – the protective layers of the Earth’s atmosphere – scrubbed most of the primary cosmic rays into showers of secondary particles. Others thought the primaries jetted right through. But no one could reach altitudes high enough to test the competing theories. 
                </p>
                <aside class="in-text"><img alt="James Van Allen photographing the rackoon experiments to detect cosmic rays in Earth's atomosphere" src="/vanallen/files/fullsize/01e012820e4e18bcb7fb5dff6e747b0b.jpg"><p class="caption">James Van Allen photographing the rackoon experiments to detect cosmic rays in Earth's atomosphere</p></aside>
				<p>Then Van Allen sent his detectors up in the V-2 rocket and found the steady stream of incoming cosmic rays at 31 miles above the Earth.  And his detectors found the debris of nuclear reactions in the stream of cosmic rays bombarding the atmosphere, evidence validating previous findings that protons, not electrons made up the dramatic cosmic ray bursts that splintered into pions, gamma-rays, muons and neutrinos as they collided with the atmosphere. 
                </p>
                <p>His wasn’t the only find with the V-2. Scientists reaped new information about weather currents and they reached and identified layers of the atmosphere – the ozone layer and the ionosphere, long known to mirror back radio waves that made radio transmission possible.
                </p>
				<aside class="fb-caption arrow_box">
					<header id="fbcosmicray"><h4>How cosmic rays create time machines</h4></header>
                    <p class="caption">Cosmic rays striking atoms in the atmosphere trigger a cascade of reactions that create precision clocks for science. The reactions unleash neutrons that can interact with nitrogen atoms, kicking out a proton and taking its place in the nucleus. That transforms the nitrogen atom into an unusual form of carbon – carbon-14, with six protons and eight neutrons. Nitrogen atoms have seven protons and seven neutrons while carbon atoms, the building blocks of life, usually have six of each. Only living organisms absorb carbon – including carbon-14 – and they absorb it in consistent proportions. Changes in that proportion allow scientists to estimate the loss of carbon-14, an unstable isotope that decays away at a measurable rate. Carbon-14 dating give archeologists a tool to date bones, teeth, ancient garbage and other artifacts they find across thousands of year.
                    <br/>
                    Cosmic rays that do penetrate to the surface of the Earth generate beryllium-10, another isotope, when they strike rock and the buildup of beryllium-10 can tell climate scientists how long ago glaciers may have lumbered back from a rock buried in ice. They can do so because beryllium-10 doesn’t forms in an ice-covered rock. Beryllium-10 offers a calendar of the invasion and retreat of glaciers in the past, a calendar that helps build models needed to predict what we are facing with climate change now.
                    </p>
				</aside>
                <p>With higher altitudes within his grasp, Van Allen wanted to measure the impact on cosmic ray intensity of the Earth’s magnetic field as it arched toward the poles and show how intensity changed with intense solar explosions such as solar flares. He wanted to do so by launching his detectors on rockets at the equator and comparing results at different latitudes as he approached the poles. A shipboard launch out in the middle of the ocean was the most sensible way to accomplish a nomadic itinerary of launches. But the heavy, four-story V-2 wasn’t a good candidate for such a program and a quick count told Van Allen the inventory of them would soon run out. Always planning ahead, he invented the Aerobee, a far smaller, work-house rocket designed strictly for science in space.
                </p>
                <p>A group of influential scientists visiting the Applied Physics Laboratory early in 1950 came to Van Allen’s small white frame house for dinner and Abbie Van Allen topped off the meal with her famous seven-layer chocolate cake. Van Allen credited the cake for the group’s sudden inspiration to ignite plans for another International Geophysical Year. It had been nearly a generation since the last geophysical year – a year of cooperative study of the Earth’s surface, atmosphere and magnetic field. As plans moved forward, organizers set the goal of placing a satellite in orbit. <span class="pull">As the challenge became an immediate contest between Russian and the United States, Van Allen began designing a detector that could measure cosmic rays intensities in a whole new arena.</span> But he took a permanent detour back to Iowa on his way to outer space.
                </p>
            </article>
            <article class="text-container" id="iowa"><header><h3>Return to Iowa</h3></header>
                <p>In 1951, Van Allen came home after his alma mater the University of Iowa offered him the chair of the Department of Physics and Astronomy. He liked to quip that Long Island-bred Abbie skeptically asked, “Where’s Iowa?”
                </p>
				<aside class="image"><p class="caption">Selection of interior pages from the 1951 State University of Iowa year book depicting an artist's rendition of the University of Iowa campus.</p><img alt="Selection of interior pages from the 1951 State University of Iowa year book depicting an artist's rendition of the University of Iowa campus" src="/vanallen/files/fullsize/dc642623e93b82eec644d1671138e5b9.jpg"></aside>
                <p>He returned to the 1910 physics building where he had earned his Ph.D. assessing a critical nuclear reaction on a temperamental early particle accelerator. He had helped build this beast with recycled parts junked from gasoline pumps and lots of faith in glyptal, a vacuum sealant goop made by General Electric. Now, Van Allen’s return brought one enormous problem for a space explorer – a net zero budget to continue his research. He couldn’t afford to fly his own Aerobee rockets any longer. <span class="slide">He quickly applied small-town Iowa ingenuity</span><div class="toggle initiallyHidden"><img alt="Selection for Les Meredith's scrapbook which has a newspaper clipping from the July 7, 1951 Daily Iowan, entitled Childs Toy IS State University of Iowa professors Instrument with photographs of students releasing balloons to test cosmic radiation in the atmosphere in front of Kinnik stadium" src="/vanallen/files/fullsize/7f09b1e2cbef4c1752586f36ad4597a1.jpg"></div> to space missions by calling on contacts in the Navy and at the Jet Propulsion Laboratory to obtain the balloons and rockets for his rockoons.
                </p>
				<aside class="image"><p class="caption">State University of Iowa students releasing weather ballons in front of Kinneck Stadium from Leslie Meredith's scrapbook, 1951-1955.</p><img alt="State University of Iowa students releasing weather ballons in front of Kinneck Stadium from Leslie Meredith's scrapbook, 1951-1955" src="/vanallen/files/fullsize/e98c43fcbcb178c6946350eedf665a91.jpg"></aside>
                <p>He hitched rides on a series of ice breakers for annual trips that brought him near the poles, shooting rockets from various latitudes along the way as he had planned. And, just as quickly, he began recruiting a series of brilliant graduate students into a space program they hadn’t known existed five minutes before they walked into his office. George Ludwig was one of them, an Air Force pilot with an instinct for electronics who returned to his father’s Iowa farm when he completed military service.
                </p>
				<aside class="in-text"><img alt="George Ludwig, one of Van Allen's graduate students, posing with Explorer I" src="/vanallen/files/fullsize/64e3ff2f8bab29e310016953d3596f20.jpg"><p class="caption">George Ludwig, one of Van Allen's graduate students, posing with Explorer I</p></aside>
                <p>Fairly confident that von Braun’s next generation of rockets, under construction at the Army Ballistic Missile Agency (now the Marshall Space Flight Center) in Huntsville, Ala., would carry the first satellite into space and knowing von Braun had a satellite in the works, Van Allen and Ludwig began to develop a cosmic ray detector for orbit. Then, suddenly, in 1955 all bets were off as politics invaded the space race.   
                </p>
            </article>
        </section>
		<div id="section-1" class="section image image0 bg-fixed" style="background-image: url(/vanallen/files/original/84b3e789ea830a3d48f91e7f56f9858a.png);">
			<!--<h2 id="header-1" class="animated fadeInUp">Launch to Discovery</h2> --></div>
        <section class="doc-show section text" id="launch">
         <header><h2>Launch to Discovery</h2></header>
            <article class="text-container" id="moons"><header><h3>Making artificial Moons</h3></header>
                <p>How would the Russians react if a military rocket launched a satellite into orbit, trespassing over their air space with an artificial moon? <span class="pull">For the Eisenhower administration, the question hung in the unchartered boundary marking the “freedom of space.”</span> And it became a factor in selecting the Navy’s Project Vanguard over the Orbiter that von Braun and the Army proposed for the race to get a satellite into space. The Jupiter C military booster rocket and JPL’s upper stages existed already but configuring them together, testing them and completing the satellite was to take an estimated 18 months. The Naval Research Laboratory offered the Vanguard as an alternative rocket and satellite system that could be designed and built for civilian space exploration in the about same amount of time – 18 months. All things being equal, an advisory committee backed the Vanguard as America’s official satellite mission in 1955 despite the committee chairman’s heated pleas and objections.
                </p>
                <p>Delays soon plagued the untried Vanguard while orders to abandon Army satellite development officially handcuffed von Braun’s project. Still, von Braun and his team moonlighted on the  mission on their own time. Ernst Stuhlinger, a key physicist on the team, worked in his garage, creating the hand-operated detonator to fire the upper stages of the rocket. He also designed an apex calculator to predict when the Jupiter C had reached its highest point, the point where the upper stages must be fired with split-second timing. Josef Boehm worked on perfecting the satellite from a design he and von Braun nurtured over the years. 
                </p>
				<br/>
				<div class="vanallen">
                    <div><img alt="Several men inspecting the Vanguard rocket nose" src="/vanallen/files/thumbnails/c87c97819b4ea2c65859c7705e9ed6f7.jpg"></div>
                    <div><img alt="Vanguard rocket in a rough state of construction" src="/vanallen/files/thumbnails/e6d394acc6f7b934ba6f1f03967ddc15.jpg"></div>
                    <div><img alt="Vanguard rocket body freshly painted being hoisted into rocket cradle" src="/vanallen/files/thumbnails/62c5006a7a581c69fcabe662e895d1ef.jpg"></div>
                    <div><img alt="Several men attaching satellite system to the Vanguard rocket" src="/vanallen/files/thumbnails/38b573a1d23858e6d5bc8bee7445d3ee.jpg"></div>
                </div>
                <br/>
                <p>Testing went forward on the Jupiter C booster rocket, with JPL’s two upper stages and a dummy payload in the nosecone as part of the Army’s ballistics program. Military brass kept the program under surveillance, though, so no one could sneak a stowaway satellite in that nosecone instead. A perfect test on Sept. 20, 1956 propelled an inert fourth-stage payload at the thrust and altitude needed to inject a live satellite into orbit. The launch convinced the von Braun team that they could have sent a satellite into orbit that day, more than a year ahead of <sname>Sputnik</sname>. Stuhlinger phoned his trusted friend James Van Allen with the news.
                </p>
                <p>At White Sands, the American scientists and the German rocketeers generally kept their distance. But the courtly Stuhlinger bridged the gap, climbing up ladders with the experimenters to the nose cone of the gleaming, four-story V-2 to check instruments and secure battery connections. Van Allen characterized him as the “ombudsman” for the scientists and a kindred spirit. He and Stuhlinger shared an interest in cosmic rays and detectors. Stuhlinger had studied with Hans Geiger in Germany in the 1930s and helped develop the Geiger counter used to detect nuclear reactions and cosmic rays. 
                </p>
				<aside class="video"><div id="kaltura_player_1409759014" style="width: 640px; height: 480px;" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
					<span itemprop="name" content="CosmicRayExp1955"></span>
					<span itemprop="description" content=""></span>
					<span itemprop="duration" content="80"></span>
					<span itemprop="thumbnail" content="http://cdnsecakmi.kaltura.com/p/1004581/sp/100458100/thumbnail/entry_id/1_britwj0s/version/100000/acv/61"></span>
					<span itemprop="width" content="640"></span>
					<span itemprop="height" content="480"></span>
					</div>
					<script src="http://cdnapi.kaltura.com/p/1004581/sp/100458100/embedIframeJs/uiconf_id/15920232/partner_id/1004581?autoembed=true&entry_id=1_britwj0s&playerId=kaltura_player_1409759014&cache_st=1409759014&width=640&height=480&flashvars[akamaiHD.loadingPolicy]=preInitialize&flashvars[akamaiHD.asyncInit]=true&flashvars[streamerType]=hdnetwork"></script>
				</aside>
                <p>Stuhlinger first approached Van Allen about <span class="slide">building a cosmic ray instrument</span><div class="toggle initiallyHidden"><img alt="Schematics of the Explorer 1 cosmic ray experiment module" src="/vanallen/files/fullsize/6399337e5e007d96611170c2afb3c069.jpg"></div> for a small experimental satellite in 1954 while Van Allen was on sabbatical at Princeton. Abbie invited him to dinner and the two physicists sat in Van Allen’s study afterwards. Van Allen lit his pipe and Stuhlinger laid out the plan. “The only sign of life was the vivid smoke production,” Stuhlinger recalled later in his memoir <i>Wernehr von Braun, Crusader for Space</i>. “All he said was, ‘Thanks for telling me all this. Keep me posted on your progress will you?’” Stuhlinger thought he had failed to spike any interest or confidence but he had only encountered Van Allen’s cautious ability to stand fast and wait for the right moment.
                </p>
                <p>That moment arrived with Stuhlinger’s 1956 phone call and word of the Jupiter C’s success. “The Vanguard program won’t deliver on time,” Stuhlinger predicted, an opinion both scientists heartily shared. Stuhlinger asked Van Allen to develop a hush-hush cosmic ray experiment for the undercover satellite being built for the Jupiter C. This time, Van Allen gambled. His detector design, already selected as a top priority instrument for the Vanguard, could do double duty. With a risky secret agenda, Van Allen and George Ludwig began retooling it so it would fly on either the Vanguard or the Jupiter C. 
                </p>
                <p>“Presently, [von Braun’s technicians] have the proven capacity of projecting 18.5 pounds into orbit,” Van Allen noted in his journal. “Might have about two pounds available for us.” In their double lives, Van Allen and Ludwig made formal reports on the progress of the Vanguard instrument at the meetings for the International Geophysical Year and worked on the Jupiter C with the team at the Army Ballistic Missile Agency in Huntsville.
                </p>
            </article>
            <article class="text-container" id="days"><header><h3>Give us 90 days!</h3></header>
                <p>As <sname>Sputnik</sname> first orbited over the heads of astounded Americans on Oct. 4, incoming Defense Secretary Neil McElroy was touring the Huntsville missile base. His hosts - Von Braun backed by two generals and the Secretary of the Army – immediately confronted him about resurrecting the Jupiter C satellite mission.
                </p>
                <p><span class="pull">“We could have been in orbit a year ago,”</span> von Braun said. “Vanguard will never make it. We have the hardware on the shelf. For God’s sake turn us loose and let us do something. We can put up a satellite in 60 days.” General John Medaris, commander of the missile base, countered with 90 days. And 90 is the deadline Medaris quoted when he announced to his rocket team on Nov. 8 that the Ballistic Missile Agency had been tasked with launching a scientific satellite into orbit with the Jupiter C.  “Let’s go Wernher,” he says to the smiling von Braun in a newsreel released months later. But behind the scenes, the Jet Propulsion Laboratory took over von Braun’s dream assignment of building the satellite to fit JPL’s second and third stages for the rocket.
                </p>
				
                <p>“Von Braun swallowed hard but did not comment,” Stuhlinger reported of the tumult in his memoir. Von Braun knew that JPL had saved the day for the Jupiter C, devising the re-entry testing program and lobbying to give the rocket back in the satellite program. He gave the laboratory a grateful and graceful pass, according to Stuhlinger.
                </p>
                <p>Now all they needed was <span class="slide">an official scientific instrument</span><div class="toggle initiallyHidden"><img alt="General Mills mechanical division letter of submission for the six tape recorder mechanisms for Explorer 1" src="/vanallen/files/fullsize/97d548f64a7e98f9aaee65b888140e0c.jpg"></div> for their scientific satellite. JPL director William Pickering met with the Huntsville team the next day to hammer out details and announced that the University of Iowa cosmic ray instrument would just happen to fit the Jupiter C, keeping the civilian character of the mission. “You don’t say,” von Braun blandly noted.
                </p>
                <p>But where was Van Allen? Sailing on the fringes of Antarctica by now, he remained remote from the political fireworks and the sudden change of status for the Jupiter C in an all-out push to get an American satellite into orbit.
                </p>
				<aside class="image"><p class="caption">Wasting no time, other than to snap this picture, George Ludwig loaded Explorer I into his Mercury sedan</p><img alt="George Ludwig squating beside the Explorer 1 satellite before loading it into his car" src="/vanallen/files/fullsize/16d69d0e7cc384cf094314529839e456.jpg"></aside>
                <p>George Ludwig wasted no time. He packed America’s first space experiment in the trunk of his black and white 1956 Mercury sedan and filled every cranny of the car with other components, a few clothes and kitchen items. “Rosalie and I fitted five-year-old Barbara and four-year-old Sharon into ‘cockpits’ formed among our belongings in the backseat,” Ludwig recalled in his book, <i>Opening Space Research</i>. “Rosalie, now more than six months pregnant, made herself as comfortable as possible for the more than 1,600-mile trip, and we were off.” They headed west across U.S. Highway 6 on Nov. 15, two days after Ludwig’s 30th birthday.
                </p>
                <p>The Eisenhower Administration breathed a sigh of relief when the Russians settled the air space issue that opened the door for reconnaissance satellites as well as scientific ones. Not only was <sname>Sputnik</sname> flying over the U.S. but the Soviets had trundled it into space in an ICBM, unconcerned about efforts to create a civilian image. But Texas Sen. Lyndon Johnson, a powerhouse for the Democratic Party, sensed the pulse of American outrage and capitalized on it with weeks of hearings. Von Braun appeared to testify just days after the first Vanguard rocket exploded seconds after a launch at Cape Canaveral on Dec. 6, 1957. “Kaputnik,” read one headline about the failed mission. Johnson and von Braun, two consummate opportunists, sized each other up and tossed each other lines that clued in Americans about the lost chance to beat the Russians into space. Now the Jupiter C carried America’s best hopes for vindication.
                </p>
            </article>
            <article class="text-container" id="warroom"><header><h3>The War Room wait</h3></header>
                <p>Van Allen, von Braun and Pickering had partnered so long for the launch of <sname>Explorer I</sname> but they didn’t witness it.  They gathered in the War Room of the Pentagon with Army Secretary Wilbur M. Brucker and General Lyman Lemnitzer, Army vice chief of staff, on Jan. 31, 1958. There was no television or even a loud speaker to bring them news in this inner sanctum – just a phone. A call from the cape reported a successful launch with the satellite reaching an orbital path and moving eastward around the globe. The group in the War Room bantered in high spirits as they awaited the next call to confirm the satellite was in orbit.
                </p>
				<aside class="image"><p class="caption">Illustration of <sname>Explorer I</sname>'s approximate orbital path around the Earth at the orbital velocity of 18,000 miles per hour. The official U.S. Army photograph released by the Department of Defence in 1958.</p><img alt="Illustration of Explorer 1's approximate orbital path around the Earth at the orbital velocity of 18,000 miles per hour. The official U.S. Army photograph released by the Department of Defence in 1958" src="/vanallen/files/fullsize/fc44a8a74a07ed42ca4cf127df2c94c0.jpg"></aside>
                <p>“Boys, this is just like waiting for the precincts to come in,” Brucker wisecracked. But even an election could be fixed  - and the satellite was now beyond anyone’s control. A tense mood gripped everyone as time passed.
                </p>
                <p>“It was a really anxious period and silence settled over the whole group. We drank coffee and chewed our nails and wondered what had happened because the expectation was that the satellite would go into orbit and should come around the Earth [and reach California] in about 91 minutes, but 91 minutes passed and we got to reception, no reception,” Van Allen recalled.
                </p>
                <p>A series of calls from General Medaris at the cape broke the grim quiet in the War Room but offered no answers. Medaris was hoping Pickering would have some news from JPL. Pickering finally telephoned JPL assistant director Frank Goddard and small-talked. More than 105 minutes passed…106…107 as Goddard listened for word from one of the West Coast telemetry stations or even from a ham radio operator that <sname>Explorer I</sname> had made it.
                </p>
            </article>
            <article class="text-container" id="bird"><header><h3>"We've got the bird"</h3></header>
                <p>The San Gabriel Radio Club gathered in an old brick building on Broadway Street with the antennas on the roof and their radio receivers calibrated. Their headsets picked up the <sname>Explorer</sname>’s signal first, 108 minutes after liftoff. Seconds later, the signal beamed to a second California station at Earthquake Valley.
                </p>
                <p>“We’ve got the bird,” Goddard shouted.
                </p>
				<aside class="image"><p class="caption">Press photograph of <sname>Explorer I</sname> satellite</p><img alt="Press photograph of Explorer 1" src="/vanallen/files/fullsize/88bcc3103c29fb52be2e79aad9a0a239.jpg"></aside>
                <p>“Pickering announced the good news and everyone was jubilant and everyone slapped one another on the back. Then, we had to leave for a press conference at the National Academy of Sciences,” Van Allen said. It was now close to 2 a.m. on February 1 and a military chauffeur drove Van Allen, von Braun and Pickering through deserted Washington streets in a steady rain. He unceremoniously dropped them off at the back door of the academy.
                </p>
                <p>“We wondered if anyone would be there,” Van Allen said. “We walked in and there were cameras and reporters – the room was full. And we stood there for two hours answering questions.”
                </p>
                <p>The press needed a good picture for the morning papers and the three men spontaneously picked up a prototype of the tubular <sname>Explorer I</sname> satellite and hoisted it over their heads in a victory pose. The photo became an instant icon of the space age.
                </p>
                <p>“Jupiter C Puts Up Moon,” applauded the banner headline of the special Satellite Edition of the Huntsville Times.
                </p>
                <p>But Van Allen barely had time to savor the moment and catch a few hours of sleep when lengthy gaps in his detector data suggested that the cosmic ray counter on <sname>Explorer I</sname> had failed – or he had discovered something in space that no one on Earth knew existed.
                </p>
            </article>
            <article class="text-container" id="mystery"><header><h3>Mystery in the gaps</h3></header>
                <p>Scientists invented early space instruments from scratch - improvising from other fields as they went along. Van Allen and his graduate students cobbled together cosmic ray detectors with miniaturized 
				<span class="slide">parts meant for watches, hearing aids, nuclear research and the latest rage – transistor radios.</span><div class="toggle initiallyHidden">
					<br/>
					<div class="book">
						<div><img alt="Front page of the March 1959 State University of Iowa Physics Club publication called Fusion depicting Explorer 1 payload" src="/vanallen/files/fullsize/c0c0cd2c90535894ab0893986107d7ad.jpg"></div>
						<div><img alt="Table of Contents for Fusion volume 2, number 3 From Feruary 1959. Fusion is published bi-montly by the State University of Iowa Physics Club. It is sent free to Physics Department faculty and staff members, physics majors and other interested students. One copy is sent to each high school in the state of Iowa and copies are sent to various Universities and colleges. In this issue: Cosmic ray researhc with space probes by William Whelpley. Some glances at creative mathematics by Peter Landweber. Solar Energy: Solar Batteries by Donald B. Novotny. The place of Physics amont the sciences by Donald Simanek." src="/vanallen/files/fullsize/790bd15914abbb17d617a479f0a4b164.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/bf6b9dfecf358bf733ef026039c84044.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/5e6aea54903ad91bba69e295d97d48bb.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/20ae5182d48d2210fda8c0991add12a7.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/011d61d3d31f4fef0fc863018dd4b141.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/dcdaefc718aa776d233871f762b66f1c.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/d659e1cf1c01a34931de9182dfe32801.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/d13b4930330ab8e2b29cce2931867dda.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/d3c1c118d6da5abc7d1d93b720fb3278.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/bd1fa9c570951791c3561eaa601fa574.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/fcf009ded249247dd79872c14639b79f.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/053b57ac5497c470cffb1265ce562f97.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/7aff965f33f97cb40c7473e280fe8442.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/c9fa3a0e7be359c2829f7a3395c3c3e5.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/7922fb1feb89e069637b43476db38965.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/bece177c0ebe3627917b695e88c46213.jpg"></div>
						<div><img alt="" src="/vanallen/files/fullsize/b17e448c7b94c2ad148c24f7fcf9e949.jpg"></div>
					</div>
					<br/>
				</div>
				The machine shop in the physics building fabricated other parts non-stop. Harried graduate students rushing in to buy wire or miniscule screws for instruments became a familiar sight at Iowa City hardware stores.
                </p>
                <p>The Geiger tubes needed to count the cosmic rays remained a critical part of the whole system. Van Allen scouted down special Geiger tubes for <sname>Explorer I</sname> to Anton Electronics, a dingy storefront in Brooklyn that looked like a neighborhood repair shop. “I made Geiger tubes myself when I was in graduate school but nothing of the quality that Anton achieved. It was pretty amazing what came out of this little hole in the wall, grubby place,” Van Allen said.
                </p>
				<aside class="image"><p class="caption">Photograph of <sname>Explorer I</sname>'s tape recorder from the side. September 1968</p><img alt="Photograph of Explorer 1 tape recorder from the side with scale. The component is two inches in diameter" src="/vanallen/files/fullsize/a904a481f27d4b6b7135ecff1d0f33c6.jpg"></aside>
                <p>Looking through the window of the wood-burning stove in his Iowa hometown as a boy, Van Allen could have found a clue to his future in space. “The window was covered with mica. It’s a natural material and can withstand heat, cold, the damp and the dry. It’s really fantastic stuff,” Van Allen noted. Nicholas Anton developed his signature detectors for physicists analyzing nuclear reactions. They were perfect for a trip in a satellite to count cosmic rays because Anton’s proprietary design sealed a sturdy mica window with a fine beading of glass around the rim. The tiniest leak in a Geiger tube renders them useless since they are filled with gas. Cosmic rays enter the tube, ionize a gas molecule and generate an electric pulse. It’s the pulses that were counted by palm-sized discs of miniature electronics “potted” in a pink foam that hardened around them, holding them in place in the cylindrical detector. The instrument reflected a single-minded creation of simplicity, sophistication and mechanical strength. Still, no one had sent such a creation up in a satellite before or tried to record messages from it.
                </p>
                <p><span class="pull">“I’ve got bad news for you. My people tell me your counter stopped working,” Pickering told Van Allen the day after the launch.</span>
                </p>
                <p>“I thought he was wrong because we had all pieces [to show] where it was and wasn’t working,” Van Allen recalled.
                </p>
                <p>Still, he couldn’t explain the anomaly either. The distances between the surface receivers, the unexpected spin of <sname>Explorer I</sname> as it orbited and the uncertain altitude of the satellite made it hard to recognize any pattern to the static hum. 
                </p>
                <p>But even the fragmentary data produced miles of reel-to-reel audiotapes that delivered cosmic rays counts in the form of a staccato symphony of rising and falling tones. Technicians at the receiving stations activated the reel-to-reel machines for each of the 15 minutes tapes, roughly the time the satellite was in transmission range. These original audio tapes from stations around the world arrived at the University of Iowa via regular mail days after they were recorded. Each tape incorporated up to seven tracks of information, including a time stamp, the tones and an occasional voice track where a technician recorded additional information.
                </p>
                <p>The backlog of tapes piled ever higher in the cramped basement beehive where tapes played non-stop on Crown Royal consoles. The playback drove pens on long arms that pulsed and slithered across paper tapes to graph the audio tones. A squadron of students measured the peaks and valleys of the graphs and converted them into numerical counts.
                </p>
				<aside class="fb-caption arrow_box">
					<header id="fbNASA"><h4>The birth of NASA</h4></header>
                    <p class="caption">The fight was on over the spring and summer of 1958 as James Van Allen clinched the discovery of the radiation belts and the army, navy and air force all planned competing space missions. Clearly, the United States needed a space agency. Eisenhower and a majority of scientists wanted it to be a civilian-led agency, in keeping with the mission of peaceful space exploration. Van Allen testified at the lengthy hearings chaired by Sen. Lyndon Johnson (D-Texas), one of dozens of witnesses. Van Allen promoted a strong role for universities in creating a national brain trust for civilian space exploration. The Explorers aside, he was a major stakeholder in an agency that would identify future missions. He had helped guide the way as chairman of a volunteer rocket panel representing all the civilian and military players to prioritize experiments for rocket flights starting with the V-2s at White Sands after World War II. The group morphed from the V-2 Panel, to the Upper Atmosphere Rocket Research Panel to the Rocket and Satellite Research Panel. His colleagues appointed him as chairman of the group early on and wouldn’t allow him to resign.  Van Allen’s detectors rode on Pioneer 1, one of five instruments on the first mission after NASA opened shop as a civilian agency on Oct. 1, 1958. But the military continued to play a key role. Pioneer, a U.S. Air Force probe, rocketed on a trajectory toward the moon, nearly 250,000 miles away. Pioneer I traveled a record 72,765 miles above the Earth and then fell back and disintegrated. That was enough for detectors designed by Van Allen and Carl McIlwain to fly through an entire swath of the inner and outer radiation belts for the first time.
                    </p>
				</aside>
                <p>Faculty member Ernst Ray and graduate student Carl McIlwain worked with Van Allen to analyze the tapes. Ludwig returned from JPL and joined the effort, grading the quality of the taped data from A to F in his 120 pages of logs, an A designating noise-free data and an F meaning no readable data. From the first 10 orbits of <sname>Explorer I</sname> and 34 transmissions of data, Ludwig’s logs give nearly half of them an F. There were no back-up tapes. Nothing like them or the missions that generated them had ever existed before. Even NASA wouldn’t be organized until that fall. Iowa had the original and “the only archive of data tapes from those missions,” Ludwig said.
                </p>
            </article>
            <article class="text-container" id="satellite"><header><h3>A satellite with a memory</h3></header>
                <aside class="in-text"><img alt="Photograph of the next generation Explorer satellite in front of blueprints for the radiation belt experiment" src="/vanallen/files/fullsize/c0df004eebd2afa309e0a15deb61492d.jpg"><p class="caption">Photograph of the next generation <sname>Expolorer</sname> satellite to test the "holes" in <sname>Explorer I</sname> data</p></aside>
				<p>Van Allen kept searching in the baffling graphs made from the tapes for a transition from the steadily rising counts to the sudden plunge to zero counts. If a transition existed, it was lost in those gaping holes. Van Allen hoped to fill the holes with data from <sname>Explorer II</sname>.
                </p>
                <p>Ludwig’s invention of a miniaturized, magnetic tape recorder “was to give the satellite its memory,” wrote New York Times reporter Walter Sullivan “It was the size of a small alarm clock, designed so that the [40.5 inch] magnetic tape would jump forward once a second for as long as two hours, winding a spring as its wheels revolved.” A satellite with a memory was just what Van Allen needed. One radio command and the recorder could send more than a full orbit of data to the receiving stations. Only some of the stations could telemeter stored data from the recorder but any one of these stations would access a far more complete data record than all of them together could provide from <sname>Explorer I</sname>. Van Allen hoped to see how a journey through space could paralyze a Geiger counter and then restore it to normal function.
                </p>
                <p>Ludwig started working on the recorder in 1956. “To initiate playback, a ratchet was released, permitting a spring to rewind the tape onto the supply reel,” Ludwig explains in his book, <i>Opening Space Research</i>. The playback head transmitted the data but also erased it for another round of recording on the same tape. The tape moved in short stops like the hands of a mechanical clock. It recorded 200 seconds of data per inch of tape until the playback command from the ground released the ratchet and spring.
                </p>
				<aside class="image"><img alt="George Ludwig recording data tape playback into his personal notebook" src="/vanallen/files/fullsize/03e3bcb27efef3a18e86d90d792eb235.jpg"><p class="caption">George Ludwig recording data tape playback into his personal notebook</p></aside>
                <p>No one had ever tried recording in space before and Ludwig predicted what would happen to standard components. Mylar magnetic tape could stretch at high temperatures, for instance. That had to go. Ludwig found a far more rugged 0.001 thick metal tape electroplated with a nickel-cobalt recording surface. The recorder with its metal tape was ready to be configured for <sname>Explorer I</sname> but was sacrificed in the frantic effort to place a satellite into orbit as quickly as possible. It flew on <sname>Explorer II</sname>, but that satellite failed to fire into orbit. Now everything was riding on <sname>Explorer III</sname>, launched on March 26, 1958.
                </p>
                <p>A near miss threatened to cut off <sname>Explorer III</sname> instrument operations when Ludwig found faulty wiring during countdown at the cape.
                </p>
                <p>“My reaction was to heat up the soldering iron and start rewiring the wiring channel,” Ludwig recalled in a University of Iowa documentary on Van Allen. “A number of JPL people relocated to a trailer to find out what they should do about this madman who was rewiring the satellite during countdown.” Once it launched, the detector and recorder worked perfectly.
                </p>
            </article>
            <article class="text-container" id="music"><header><h3>The music of discovery - <sname>Explorer III</sname></h3></header>
                <p>In the fall of 1932, 18-year-old James Van Allen lugged a field magnetometer across Henry County, Iowa, near his hometown of Mount Pleasant, the county seat. He took dozens of readings of the intensity and direction of the magnetic field in the towns and open fields, helping out his physics professor Thomas Poulter at Iowa Wesleyan College in Mount Pleasant. The elegant instrument had “brass fittings and ivory knobs and a small telescope for measuring the angle of the sun” at the time he took a reading, Van Allen recalled. His measurements insured that the instrument was properly calibrated for a critical mission – Poulter’s expedition to the Antarctic with Admiral Richard Byrd in 1933. The magnetic field would increase in intensity as the Byrd party approached the South Pole and the scientists could count on measuring the changes precisely thanks to Van Allen’s odyssey in Iowa.
                </p>
                <p>His youthful curiosity about the magnetic field of the Earth escalated as his rockoon launches showed how cosmic ray intensities increased with distance from the equator, pooling near the poles where clusters of arching magnetic field lines intersect the Earth. Now with the music from <sname>Explorer III</sname>, Van Allen discovered how the magnetic field of the Earth reshapes space thousands of miles beyond the atmosphere.
                </p>
				<aside class="image"><p class="caption">Earth's Magnetosphere. Five spacecraft from the THEMIS mission have helped map out this area and improve our ability to predict dynamic space weather events – events that at their worst can impact satellites in space.<br/>Credit: Courtesy of NASA</p><img alt="NASA illustration of Earth's Magnetosphere" src="/vanallen/files/fullsize/5995db44368a29a709fde588c3a6d3b2.jpg"></aside>
                <p>The Naval Research Laboratory in Washington, D.C., worked to optimize data capture for the satellite at their receiving stations and the San Diego station downloaded the first complete global recording of cosmic ray counts made by the detector. Van Allen came to Washington to confer with NRL scientists and learned that the first chants of the <sname>Explorer III</sname> readings had been transmitted to the D.C. data reduction center that NRL developed for the Vanguard missions.
                </p>
                <p>On Wednesday, April 2, Van Allen took a taxi to the center on Pennsylvania Avenue and picked up the paper tapes graphing the cosmic ray counts. He stopped at a drug store to pick up graph paper and a ruler on his way back to the Dupont Plaza Hotel. He used his slide rule and NRL’s fresh estimates of the orbit altitude to recalculate the peaks and troughs of cosmic rays as a function of the latitude and altitude of the satellite. He could see 15 minutes of cosmic ray levels rising to the maximum his detector could process, then a lengthy drop to zero counts, and then more counts, as though the satellite and space had an on-off switch.
                </p>
                <p><span class="pull">“At 3 a.m., I packed my work sheet and graph and turned in for the night with the conviction that our instruments on both Explorers I and III were working properly but that we were encountering a mysterious physical effect.”</span>
                </p>
                <p>The audio tape data arrived at Iowa while Van Allen was gone. McIlwain, Ray and graduate student Joe Kasper immediately set to work processing data from the reel. “We were looking for a clear transition, the switching point from rising counts to zero,” McIlwain said. “Now there it was. So we knew at once that there was something of very high intensity out there. I immediately took the spare payload and put it in front of an x-ray machine.” The x-ray output showed that massive levels of radiation could choke off the detector.
                </p>
                <p>Van Allen returned to Iowa, <span class="slide">welcomed by a sign Ray had left on his chair. </span><div class="toggle initiallyHidden"><img alt="Hand written notes with crude drawing of Earth's radiation belts written in red crayon, NOTE: 1958 alpha data and in all caps SPACE IS RADIOACTIVE." src="/vanallen/files/fullsize/c62bd2cb4f68a839f4a0bca6c8a620d2.jpg"></div>
                </p>
                <p>“Space is radioactive.”
                </p>
                <p>Ray’s conscious exaggeration alerted Van Allen to the fact that he and McIlwain had their own confirmation. Van Allen laid out his graphs. McIlwain laid out his x-ray findings. The men looked over the results cautiously at first. But everything pointed to an abrupt boundary in space crossing into a zone where cosmic rays abruptly rose to unimagined levels. “Then it clicked right away. That was the moment when the light bulb went on – the Eureka Moment,” Van Allen said. 
                </p>
				<aside class="image"><p class="caption">Smithsonian display of <sname>Explorer III</sname> tape recording device</p><img alt="Smithsonian display of Explorer 3 rape recording device" src="/vanallen/files/fullsize/d168e3645952dd9c0dbee665e5c1b2b0.jpg"></aside>
                <p>Ludwig returned from “foreign duty” at JPL a few days later, Van Allen noted in his journal.  Data analysis from <sname>Explorers I</sname> and <sname>III</sname> scaled up to fever pitch. With streams of paper tapes cascading across a table, Van Allen, Ludwig, Ray and McIlwain had ample evidence to hammer out a description of an intense radiation zone encircling the Earth – the first discovery of the space race.  They were ready to go public with their findings at an upcoming conference of scientists on May 1, 1958 in Washington, D.C.
                </p>
            </article>
            <article class="text-container" id="radiation"><header><h3>Radiation belts ring the Earth</h3></header>
                <p>Van Allen took the podium at a joint meeting of the National Academy of Sciences and the American Physical Society and ushered his audience into a new vision of our world.
                </p>
                <p>“The counting rate was more or less sensible at the start and then blanked as it came along in here and this transition occurred,” Van Allen reported, projecting his graphs. He described the abrupt climb of the satellite across an invisible boundary hundreds of miles above the Earth where radiation levels vaulted to 1,000 times the levels just beneath that boundary. Here, the Earth’s magnetic field trapped a dense blizzard of charged subatomic particles in a region from about 600 miles to 6,000 miles in space. This band encircled the Earth from 35 degrees north to 35 degrees south, a swath that reached roughly from Richmond, Va., to Buenos Aires in Argentina. The trapped particles traversed that distance near light speed, spiraling back and forth within the radiation zone.
                </p>
                <dialog><p>“I’d like to make sure I understand,” one incredulous scientist asked. “The idea is that the only mechanism you can conceive of by which the stuff is kept at high altitudes and kept from getting down to lower ones is magnetic confinement?”
                </p>
				<aside class="image"><p class="caption">Rings of radiation surrounding Earth and Earth's magnetosphere screenshot.<br/> Credit: Courtesy of NASA</p><img alt="NASA computer generated illustration of Earth, its magnetosphere and the 2 rings of the van allen radiation belts" src="/vanallen/files/fullsize/a7592ce97e1e6c2cb900d54998b38cd6.jpg"></aside>
                <p>“Yes, that’s the essence of it,” Van Allen replied. With the cosmic ray intensity rising so dramatically when the satellite entered this zone, “we just think we just have to have the magnetic field holding them up.”
                </p>
                </dialog>
                <p>The power of magnetic fields was nothing new. Crank a metal wire through a magnetic field and you generate electricity. This is the principal on which all electrical generating plants are based whether the generator arm is powered by coal, oil, hydropower, wind or nuclear energy.
                </p>
                <p>But the idea of the Earth’s magnetic field confining an immense zone of radiation that encircled the planet made the maps of the solar system seem obsolete. And Van Allen had only announced one belt. <sname>Explorer III</sname> readings hinted at an even more massive outer belt beyond the inner one, but not with enough certainty.
                </p>
                <p>After the session, Van Allen went to another room to meet the press and explained the refinements of “geomagnetically trapped corpuscular radiation.” Reporters grasped the central concept of a massive band of radiation girdling the planet with particles capable of piercing metal as though they were silk. Still, they needed a visual hook.
                </p>
                <dialog><p>“You mean they circle the Earth like a belt?” suggested science reporter William Hines of the Washington Evening Star.
                </p>
				<aside class="image"><p class="caption">Two giant radiation belts cirling the Earth<br/>Credit: Courtesy of NASA</p><img alt="Computer 3D model of the Van Allen radiation belts surrounding Earth" src="/vanallen/files/fullsize/bdd732cf3dfef9bcca9d05fbd7e9ed9a.jpg"></aside>
                <p>“Yes, that’s right,” Van Allen said, giving the trapped corpuscular radiation zones a handy nickname. 
                </p>
                </dialog>
                <p>At a science conference in Europe soon after, NRL physicist Robert Jastrow referred to the Van Allen Radiation Belt for the first time and the name stuck. It was the most momentous discovery of the International Geophysical Year. It opened up a new mapping of the solar system, ushering in new fields of science such as magnetospheric physics to explore the magnetic fields of planets and plasma physics, devoted to the solar wind of charged particles radiating outward from the sun.
                </p>
                <p><span class="slide">Now a celebrity scientist,</span><div class="toggle initiallyHidden"> 
					<div class="vanallen">
						<div><img alt="Iconic image of Oickering, Van Allen and Von Braun holding replica of Explorer 1 over their heads" src="/vanallen/files/square_thumbnails/510d389bb1c0a8812f02a7c80e6a5a70.jpg"></div>
						<div><img alt="Van Allen leading a tour through the Physics department" src="/vanallen/files/square_thumbnails/2bd5f754a37d13ee4adf8819df0233ba.jpg"></div>
						<div><img alt="George Ludwig holding a replica of Explorer 1 rocket while talking with a group of curious men in suits" src="/vanallen/files/square_thumbnails/f7cdf9211a00b45a6ca432ca53c49b1d.jpg"></div>
						<div><img alt="James Van Allen talking with Walter Cronkite in front of a chalk bord with equations and diagrams on it" src="/vanallen/files/square_thumbnails/75c56bce9c44e7a63048908bfbedd175.jpg"></div>
						<div><img alt="James Van Allen showing tour group the print out of Explorer audio data-tapes" src="/vanallen/files/square_thumbnails/5afbeaa414c013c3c47defe8105e3c7b.jpg"></div>
					</div>
				</div>
				Van Allen’s physics building basement became ever more crowded by the day. CBS news correspondent Walter Cronkite, Soviet space ambassador Leonid Sedov, military brass and streams of other reporters, politicians and scientists found their way there, amazed at the modest headquarters for some of the most innovative instruments on the frontier of space science. The miniaturized discs of electronics in Iowa’s detectors impressed Russian visitors immeasurably. They hoisted <sname>Sputnik</sname> into orbit at 184 pounds compared to a total weight of 30.8 pounds for <sname>Explorer I</sname> with everything in it.  It was just the start.
                </p>
                <p>The intrepid explorers Van Allen, Ludwig, McIlwain and Ernst had revealed a momentous discovery in the gaps of their data and found the courage to recognize it. Now they built instruments to study the belts directly. Van Allen and his students later set out to explore the magnetic fields and radiation belts of Venus, Mars and the outer planets.
                </p>
				<aside class="image"><p class="caption">James Van Allen, George Ludwig and Ed Freund pose with <sname>Explorer III</sname> tape recording device</p><img alt="James Van Allen, George Ludwig and Ed Freund pose with Explorer III tape recording device" src="/vanallen/files/fullsize/247f27baf6ed6f81ac3282cb4c8fcabd.jpg"></aside>
            </article>
			<article class="text-container" id="starwars"><header><h3><sname>Explorer IV - Star Wars Mission</sname></h3></header>
				<p><sname>Explorer IV</sname> had a secret - a dark, spy thriller, Cold War secret that involved an elevator mechanic, atomic bombs and suspicious Russians. 
				</p>
				<p>Van Allen with McIlwain and Ludwig, still graduate students, invented instruments to measure the intensity of the radiation belts directly with <sname>Explorer IV</sname>. No more guessing about what was hiding in the gaps. But the mission provided camouflage for an undercover agenda – whether several nuclear bomb explosions could create a protective shell of artificial radiation belts to disable incoming ballistic weapons. The Reagan administration dusted off and refined the concept with the proposed Star Wars space shield in the 1980s. The 1958 version of an ICBM “Astrodome” was the brainchild of Nicholas Christofilos, a visionary Greek elevator mechanic with degrees in engineering who rose to the highest echelons of Berkeley’s Livermore Laboratory (later the Lawrence Livermore National Laboratory).
				</p>
				<aside class="in-text"><img alt="black and white photograph of United States rocket on launch pad with Explorer payload" src="/vanallen/files/fullsize/7a0617490b877742fe35d6af81bb79e6.jpg"><p class="caption">Rocket to send <sname>Explorer</sname> payload into space</p></aside>
				<p>The idea of Christofilos’ global space shield filtered through to the Eisenhower Administration and landed at JPL for a proposed test called Project Argus. Pickering suggested Van Allen as the guy with the detectors to survey the blasts and the formation of artificial belts. Van Allen kissed the instruments goodbye as he shipped them off for assembly in the latest Explorer. <sname>Explorer IV</sname> launched into orbit on July 26, 1958 and the detectors gave immediate substance to the shadowy radiation belts that had paralyzed previous instruments. Prior to the Argus blasts, the mission observed the impact of two 10-megaton missile tests at 48 miles and 27 miles above the Central Pacific. The space blasts grabbed global news coverage. The first one, code-named Teak, unleashed a fireball across 20 miles of sky when it exploded on Aug. 1. Clearly photographed from hundreds of miles away, the blast knocked out radio communications from Australia to British Columbia in an electromagnetic tidal wave. The second blast, code-named Orange, exploded on Aug. 1 and seemed to blot out the sky over the Central Pacific.
				</p>
				<p>The three secret Argus blasts that followed, each from a 1.5 megaton bomb, detonated at 300 miles above the Earth and sparked a dazzling light show at each aurora. The electrons from the blast radiated around the globe and quickly created three thin radiation belts between the inner and outer natural ones. A beehive of students plotted the data tapes from <sname>Explorer IV</sname> without knowing what they meant. The tapes poured in from around the world and straight into the hands of a slender young woman with bobbed hair, a math degree and a security clearance. She was 22-year-old Annabelle Welsh Hudmon and <span class="slide">she managed the beehive.</span><div class="toggle initiallyHidden"><img alt="Letter from Annabelle Hudmon to James Van Allen. Perhaps you've wondered how I keep 15 people busy on data. Here's a rundown of their jobs: Reducing data 7 people. Checking Data reduced 3 people. key punching 1 person. processing data at East Hall 1 person. graphinc data on IBM card plotter 2 persons. Orbital positions on graphs and odd jobs 1 person....It would be inefficent for me to work with less people so if you have no objection, I shall keep my present work force of 15 people. carl approved my plans so far. Date: September 29, 1960." src="/vanallen/files/fullsize/f2ae6bca6cab28a3007142ebb413a6f1.jpg"></div>
				</p>
				<aside class="image"><img alt="Annabelle Hudmon with Explorer I data tapes in the basement of MacLean Hall at the State University of Iowa" src="/vanallen/files/fullsize/34b6a3a1dbd2538ef7fd50869cffce2a.jpg"><p class="caption">Annabelle Hudmon with <sname>Explorer I</sname> data tapes in the basement of MacLean Hall at the State University of Iowa</p></aside>
				<p>A glowing recommendation backing her for any job in computational analysis landed at Van Allen’s office even before she did. It came from F. S. Atchison, a physicist and director of the Naval Ordnance Laboratory in Corona, Calif. “I was working [there] on a computer for the Navy pilots to tell them when to fire the Sidewinder rockets,” she says. She married shortly before returning to her home state of Iowa where her husband, Stanton Hudmon, took his medical residency at the University of Iowa Hospitals.
				</p>
				<p>Van Allen hired her on the spot the day before he had to leave town. She moved long tables into position, tested cadres of students to make sure their math skills were sharp and set out to graph an avalanche of data tapes. McIlwain showed her the ropes and she trained the students who came to work for her. They played the data tapes on consoles filling a corridor of the basement. The thin, spidery arms of graphics plotters leaped into action, transcribing the rising and falling tones of the data tapes into rising and falling <span class="slide">patterns on paper tapes</span><div class="toggle initiallyHidden"><img alt="print out of the Explorer 1 data from the Patric Airforce Base February 4, 1958. Print out records the Channel 1 and channel 2 temperatures, with intermittent radio noise. Channel 2 records the micrometeorite counter, and channel 4 records the undulating lines of the cosmic ray counter, all in 1 second intervals." src="/vanallen/files/fullsize/29e6ceb13ceef04b86dfac4b92987ca9.jpg"></div> that cascaded into neatly folded stacks.
				</p>
				<p>“After we transcribed everything onto paper tapes, we’d plot it from there,” Hudmon says. <span class="pull">“We were plotting all those electrons and protons ---we had no idea what we were plotting.</span> I just supplied all the data. I had everything checked twice. Dr. Van Allen never got incorrect data from me.”
				</p>
				<p>McIlwain, Van Allen, Ludwig and Ray huddled over the plots to map the massive reaches of space confined within the belts. The readings from <sname>Explorer IV</sname> clearly identified the outer radiation belt, the slot between the inner and outer zones, the impact of atmospheric nuclear missile tests and then the Project Argus blasts. Radiation levels from the belts and from the blasts crescendoed into tones on tapes and Hudmon’s team converted it all to the mathematical currency of plotted graphs.
				</p>
				<p>“We ran the tapes five days a week – summers too – we were running them nonstop,” Hudmon recalls. She dropped off her husband at 7 a.m. and headed for the physics buildings. “I was the first one in along with the janitor. I worked until 3:30 or 4.” 
				</p>
				<p>She managed 15-20 students at a time. But on one part of the project, Van Allen asked her to work virtually alone and her security clearance came in handy.  “He came down and said, ‘I want you to work on this top secret project. I knew it was an atomic bomb explosion and we were measuring the protons and electrons from that explosion. But I was somewhat in the dark. The final report that I gave him was a 100 pages showing different radiation points. I think I worked on it for nearly a year,” she says. “Aside from my children, that was the most important project in my life.”
				</p>
				<aside class="image"><p class="caption">State Univeristy of Iowa students working to transcribe the <sname>Explorer I</sname> audio tape data</p><img alt="Four University of Iowa students working to transcribe the Explorer 1 audio tape data as it comes into the lab." src="/vanallen/files/fullsize/35d815651069778277aa6f89c9bed680.jpg"></aside>
				<p>But the meager belts from the blasts made it clear that maintaining such an artificial shield would require continuous bomb explosions and the plan was abandoned. The rapid declassification of key aspects of the bomb blasts themselves – already reported around the world – allowed Van Allen to discuss the artificial belts that the blasts had created at a science conference in Moscow where he was invited to speak. 
				</p>
				<p>He didn’t have to travel all the way to Moscow to find the faces of skeptics. Plenty of scientists in America thought the natural radiation belts were actually the product of atmospheric nuclear testing. The Americans blamed the Russians. The Russians blamed the Americans. Now Van Allen could settle the feud, comparing the robust natural belts to the rather puny ones generated by nuclear blasts.
				</p>
				<p>He kept mum on the details of the audacious space shield experiment. But his stunning documentation of the impact of all five blasts gave added impetus to the need to ban above ground nuclear testing.
				</p>
				<p>The detectors on <sname>Explorer IV</sname> could only explore particles in the horns of the outer belt as it arched toward the poles. Not even a satellite could navigate a cross-section of this vast radiation zone stretching thousands of miles outward from heights of about 10,000 miles above the earth at the equator. Satellites had eclipsed rockets to reach into space. Now Van Allen needed a new tool to take his detectors higher still. The <sname>Pioneer</sname> probes built by the Air Force for robotic launches to the moon gave him his wish in the fall of 1958. <sname>Pioneers 1</sname> and <sname>3</sname> fell back to Earth from altitudes of about 73,000 miles and 63,000 miles respectively, a far miss from the moon but a win for Van Allen. The missions carried his detectors through the entire swath of the inner and outer radiation belts for the first time.
				</p>
				<p>The belts arching above the Earth created a sense of unchanging permanence and stability – a domed cathedral ceiling of the Earth. Then, in August 2012, NASA sent the twin <i>Van Allen Probes</i> to the belts and soon discovered a newcomer – a third belt. <span class="pull">Finding a third belt coalescing from the dynamic remnants in the ruins of the outer radiation belt so shocked mission scientists that they, like Van Allen so many years before, wondered if something was wrong with their instruments.</span> Nothing was wrong. The instruments happened to be in place to witness a cataclysm forged by a solar flare. As a legacy to Explorer I, the discovery seemed hard to match. But Iowa scientists did match it with their songs from space, a radio recording of <sname>Voyager 1</sname>‘s passage into interstellar space after a journey across more than 11 billion miles.
				</p>
				<p><sname>Voyager</sname> crossed the boundary just days before the discovery of the third belt.
				</p>
			</article>
        </section>
		<div id="section-1" class="section image image0 bg-fixed" style="background-image: url(/vanallen/files/original/ee2dc4845854429a1b5e896a22554bbd.png);">
			<!--<h2 id="header-1" class="animated fadeInUp">The Legacy</h2> --></div>
        <section class="doc-show section text" id="legacyofexplorer">
        <header><h2>From Earth to Interstellar Space - Legacy of <sname>Explorer I</sname></h2></header>
            <article class="text-container" id="chorus"><header><h3>The chorus of space history - Listen to <sname>Explorer I</sname> data tapes</h3></header>
                <p><span class="pull">The original data tapes from the early Explorers and several other trail-blazing space missions lined floor to ceiling shelves for decades in an abandoned particle accelerator chamber in the basement of the 1910 physics building.</span> But after the severe floods of 2008 and changes in the ventilation system of the building, the tapes began to show the wear and tear of aging, humidity and mildew. The physics department and the University of Iowa Libraries launched a rescue and restore mission to preserve and digitize the 694 tapes from America’s first satellite mission, <sname>Explorer I</sname>.
                </p>
                <p>“<sname>Explorer I</sname> is gone, subsequent early satellites that remain in orbit are long silent, the ramshackle tracking stations dotted around the globe that recoded the tones sent from space have either disappeared or been wholly transformed, and Dr. Van Allen’s offices in the basement of MacLean Hall on the University of Iowa campus were dismantled decades ago. Today, the most tangible material remnant of the extraordinary effort behind the United States’ first satellite missions lies in the thousands of magnetic tapes that contain the audio signals captured on Earth at the satellites orbited overhead,” noted Greg Prickman, head of <a href="http://www.lib.uiowa.edu/sc/" target="_blank">special collections and university archives</a>. The Roy J. Carver Charitable Trust in Muscatine, Iowa, where tire magnate Roy J. Carver operated his companies, provided funding for the restoration and digital conversion.
                </p>
				 <aside class="image"><img alt="Basement of MacLean Hall in 2012 after the discovery of the Explorer data tapes" src="/vanallen/files/thumbnails/e545cf8a269f9ad23f15a685a9a07d80.jpg"><p class="caption">Basement of MacLean Hall 2012</p></aside>
				<p>The tapes hold the music of discovery - the original sound tracks and static gaps that revealed the radiation belts. The digital format makes them accessible to you. Sample them here. You can tune into short excerpts, as Explorer crossed receiving stations across the globe, or review the entire odyssey. Each tape incorporates several channels of data and even a channel where the voices of technicians at the receiving stations noted times, locations and an occasional comment on harnessing messages from outer space.
				</p>
				
				<br/>
				<div class="vanallen">
                    <div><img alt="University of Iowa Head of Preservation evaluating data tape conditions in the basement of MacLean Hall" src="/vanallen/files/square_thumbnails/673e798d4e765960ca31f59d2ebbebe7.jpg"></div>
                    <div><img alt="Detail of Explorer 4 data tape lable. Reads 16 September and channel 4 calibration 17 September to 21 September" src="/vanallen/files/square_thumbnails/471f4d36b4e74ab6a61c9c5fda250193.jpg"></div>
                    <div><img alt="Detail of data tape shelving and storage in MacLean Hall basement" src="/vanallen/files/square_thumbnails/77f92546c140621c523f5adfbd7070ed.jpg"></div>
					<div><img alt="Exposed magnetic data tape reel in soiled, damp original box with mold growth" src="/vanallen/files/square_thumbnails/6c87d614a2813655e1248d951e5456de.jpg"></div>
					<div><img alt="Preservationist in full hazard material suit and mask examining data tape reels" src="/vanallen/files/square_thumbnails/df72a999c2aa5978e16e529c7b2a3c51.jpg"></div>
					<div><img alt="In-process Library cart with cleaned data tapes in new yellow envelop enclosures" src="/vanallen/files/square_thumbnails/60d3d90913d77b3cd9b04edae062346b.jpg"></div>
					<div><img alt="Data tapes new home in Main Library, all clean and in climate controlled room" src="/vanallen/files/square_thumbnails/ad4f4caf2c9291a0333750e455edaa92.jpg"></div>
                </div>
                <br/>
				
				<p>By serendipity, the <sname>Explorer I</sname> restoration program coincided with NASA’s <a href="http://www.nasa.gov/mission_pages/rbsp/launch/#.VAdboGPis24" target="_blank"><i>Van Allen Probes</i> satellite mission</a> to the radiation belts and with <a href="http://www.jpl.nasa.gov/news/news.php?release=2013-277" target="_blank"><sname>Voyager 1</sname>’s crossing into interstellar space.</a> Both missions hold intrinsic links to Van Allen’s work and to the legacy of the data tapes. <sname>Voyager</sname> reached interstellar space on Aug. 25, 2012, just days before the <i>Van Allen Probes</i> witnessed the emergence of a third radiation belt in early September, two unbelievable space adventures occurring in quick succession. Everything just lined up - almost like the orbits of the outer planets did as Voyagers 1 and 2 set out in 1977 to tour Jupiter, Saturn, Uranus and Neptune.
				</p>
            </article>
            <article class="text-container" id="stormshelter"><header><h3>Space weather forecasting - Storm shelter for our "suberelectric cocoon"</h3></header>
				<p>Practical-minded kids – and lots of adults - always asked Van Allen to give them a job description for the radiation belts. What do they do? Van Allen liked to say they don’t do anything – they are simply a grand phenomenon of the Earth’s magnetic field. But everyone wanted the grand phenomenon to <em>do</em> something. Did they protect us from cosmic rays by trapping and confining them? Did they protect us from the eruptions of solar flares? Van Allen smiled – he had been this route before. No, our magnetic field deflected all but the most energetic cosmic rays and our atmosphere scoured most of the rest into showers of secondary particles. Solar storms generally had little impact at the surface of the Earth in the early era of the space age, other than sparking glorious light shows at the aurora of the North and South Poles. Of course, determining the presence of <span class="slide">intense radiation zones</span><div class="toggle initiallyHidden">
					<iframe src="//www.youtube.com/embed/tDqahwSl5IY?list=PLiuUQ9asub3S235ZRyZmo8DKob4VOMo7k" frameborder="0" allowfullscreen></iframe>
					</div>
				held critical implications for human space flight. NASA mapped mission trajectories at higher latitudes so that astronauts would limit exposure to radiation in the belts as much as possible.
				</p>
				<aside class="video">
					<div id="kaltura_player_1409769467" style="width: 640px; height: 480px;" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
					<span itemprop="name" content="VentureIntoSpace"></span>
					<span itemprop="description" content=""></span>
					<span itemprop="duration" content="1757"></span>
					<span itemprop="thumbnail" content="http://cdnsecakmi.kaltura.com/p/1004581/sp/100458100/thumbnail/entry_id/1_q9fpnzl6/version/100000/acv/61"></span>
					<span itemprop="width" content="640"></span>
					<span itemprop="height" content="480"></span>
					</div>
					<script src="http://cdnapi.kaltura.com/p/1004581/sp/100458100/embedIframeJs/uiconf_id/15920232/partner_id/1004581?autoembed=true&entry_id=1_q9fpnzl6&playerId=kaltura_player_1409769467&cache_st=1409769467&width=640&height=480&flashvars[akamaiHD.loadingPolicy]=preInitialize&flashvars[akamaiHD.asyncInit]=true&flashvars[streamerType]=hdnetwork"></script>
				</aside>
				<p>In the field of space physics that Van Allen pioneered, scientists thought of the belts for decades as relatively stable landmarks above the Earth. But a changing world proved them wrong. Tumultuous solar weather rocks the belts and strikes havoc for life on Earth in an era of satellite communications. The <i>Van Allen Probes</i> returned to the belts to find out just what was going on. The twin probes – with twin sets of instruments - monitor interruptions to satellite telecommunications, television transmission and GPS systems as intense solar storms pump up the radiation belts in the regions of space where satellites roam. 
				</p>
				<p>“Fifty plus years ago we had a relatively modest dependence on assets in space. But as time has gone on we have literally hundreds of thousands of spacecraft [in orbit]. We as a society have built ourselves inside a cyberelectric cocoon – layer after layer of technology and spacecraft operation that move within the Van Allen Radiation Belts now are subject to these immense transient effects from the high energy particles,” says Dan Baker, who lead the way to discovering the new belt with the Relativistic Electron Proton Telescope onboard the probes. A Van Allen protégé, Baker directs the Atmospheric and Space Physics Laboratory at the University of Colorado at Boulder. “The technology can be very severely damaged by these space storms and so [the belts], a curiosity in the earliest part of the space age, are now a necessity to understand.”
				</p>
				<aside class="in-text"><img alt="April 24, 2014 images of solar flares in three different views in 131, 304 and 171 angstorm recorded by NASA's Solar Dynamics Observatory" src="http://svs.gsfc.nasa.gov/vis/a010000/a011000/a011047/July_19_Flare_triptych-half_size.jpg"/><p class="caption">Solar flares emanating electromagnetic energy<br/>Credit: Courtesy of NASA</p></aside>
				<p>Powerful solar flares and even more powerful coronal mass ejections erupt with gales of charged particles that kick up geomagnetic storms in the Earth’s magnetic field just as hurricanes batter coastlines with winds that churn up walls of water. The solar storms can rip apart the outer radiation belt or pump it up to intensities that pound the satellites orbiting there. Geomagnetic storms ignite high electrical currents, vaulting the current in power lines until they trigger blow outs and massive power outages.
				</p>
				<p>With the storms unleashing such destruction, forecasting space weather is now a must, says University of Iowa physicist Craig Kletzing, with an instrument on each probe that measures electromagnetic waves. “The holy grail really is to get to a place like we can with terrestrial weather systems where we predict in advance what’s going to happen. That’s a ways off yet because [space is] such a complex system. The desire of almost everyone is to get to a point where, if we see this happening on the sun then - in a couple of days - this is what’s going to happen” in the belts and on Earth.” 
				</p>
				<p><span class="pull">The radiation belts pulse, surge and paralyze satellites much as they saturated Van Allen instruments into static silence.</span>  Accurate space weather forecasting would deliver the ability to model satellites of just the right strength – sturdy enough to stand up to solar storms but not weighed down with costly extra armor they don’t need, Kletzing says.
				</p>
				<p>Trying to figure out and forecast the impact in a satellite-dependent world led the scientists to return to the radiation belts in the first place. But none of them expected what they found when they got there shortly after the launch of the probes on Aug. 30, 2012.
				</p>
				<p>The probes reached the belts amid the fireworks of a solar storm unleashed by a coronal mass ejection – a massive eruption of gases from the corona of the sun. Scientists turned on mission instruments immediately, ahead of schedule, just in time to witness the collateral damage of the storm as it obliterated the outer radiation belt. Baker could barely believe the data from his electron and proton detectors - the massive outer belt, stretching thousands of miles across space, torn away. <a href="http://vanallenprobes.jhuapl.edu/newscenter/newsArticles/20140423.php" target="_blank">Then his instruments detected a third belt</a> between the inner and outer belts – a “storage ring” of what was left of the outer ring as it began to coalesce once again.
				</p>
				<aside class="video"><p class="caption">Animation of early electron flux measurements of the Van Allen radiation belts</p><iframe width="560" height="315" src="//www.youtube.com/embed/3YfKeXqVLPQ" frameborder="0" allowfullscreen></iframe></aside>
				<p>“My first thought actually was -  is there something wrong with our instrument,” says Baker, who learned the ropes about radiation belts at Jupiter as one of Van Allen graduate students during the <snamem>Pioneer 10</sname> mission to the planet in the 1970s.
				</p>
				<p>Kletzing’s captured the same startling view with Iowa’s instruments that measured electromagnetic waves – “a zoo of waves” given off by solar plasma in the storm, he said. 
				</p>
				<p>
				The sun radiates electromagnetic energy, including the visible light that makes possible all life on Earth. But the fusion furnace of the sun also emits streams of plasma that create the solar wind. Plasma - the fourth state of matter – defies the atomic structure of gases, liquids and solids. It is a volatile soup of charged subatomic particles – positive ions and negative electrons - jetting across the solar system. Shock waves rip through the solar wind after coronal explosions and, as the <i>Van Allen Probes</i> witnessed, they can tear away the dynamic outer radiation belt.
				</p>
				<p>“It suddenly got just eaten away but there was a little remnant storing the last little bit of stuff – you might call it a storage ring. And then gradually the outer belt began to fill back in – going from outward inward,” Kletzing said. “It’s very conceivable and even likely that this kind of thing has happened before but we couldn’t detect it.”
				</p>
			</article>
			<article class="text-container" id="acceslerator"><header><h3>Accelerator in the belly of the belts</h3></header>
				<p>The <i>Van Allen Probes</i> soon delivered another discovery – the existence of a <a href="http://vanallenprobes.jhuapl.edu/newscenter/newsArticles/20130725.php" target="_blank">massive particle accelerator</a> in the belly of the belts. The discovery settles decades of debate about how particles in the belts accelerate to near light speed energies. One model theorized that charged particles hurling toward the Earth gain energy as they encounter the ever increasing strength of the planet’s magnetic field and then get trapped in the belts. Imagine a rock rolling down a hill and gaining speed as it accelerates due to gravity, NASA scientists suggest. But particles spiraling up and down within the belts could accelerate right there, boosted as intense electromagnetic waves kick up their energy and speed. Physicist Geoff Reeves, of the Los Alamos National Laboratory, proved that to be the case. He tapped data from the dual locations of varied twin instruments on the probes, including Iowa’s wave instruments, to make 3D measurements of electromagnetic waves that boost the energy of the accelerating particles.
				</p>
				<aside class="video"><p class="caption">The Launch of the Twin Van Allen Probes August 30, 2013</p><iframe width="560" height="315" src="//www.youtube.com/embed/0YC1LgStykU?list=PLiuUQ9asub3S235ZRyZmo8DKob4VOMo7k" frameborder="0" allowfullscreen></iframe></aside>
				<p>Reeves’ simple, elegant experiment measured the rising energies of particles in the radiation belts. He also measured the distances of the particles from the center of the Earth. If the particles were accelerating while on the move toward Earth, their distance from the planet would decrease as their energies increased. If they accelerated within the belts at a fixed distance from Earth, then the belts must be the accelerator. And the distance stood firm! 
				</p>
				<p>The frequencies of the waves emitted in the radiation belts during solar storms lines up with the build up of particles accelerated to high energies and speeds. Kletzing points to the busts of red in his data, which tells him there are lots of waves to deliver <a href="http://www.nasa.gov/content/goddard/van-allen-probes-find-source-of-fast-particles/" target="_blank">kicks of acceleration.</a> The accelerator in the Earth’s radiation belts gives space weather forecasters a better shot at figuring out just how the energy surges rev up
				</p>
			</article>
			<article class="text-container" id="interstellar"><header><h3>Unchartered territory - <sname>Voyager 1</sname> explores interstellar space</h3></header>
				<p>University of Iowa physicist Don Gurnett keeps an ear on interstellar space. He records radio transmissions from afar – like 12 billion miles afar. He is listening in the vast reaches beyond the solar wind with a radio receiver called a plasma wave instrument, listening in a region where cosmic rays hurl across the galaxy from the explosions of giant stars. Gurnett calls up a recent recording - one that captures a first step as momentous as Neil Armstrong’s first step on the moon.
				</p>
				<p>“So I’m going to play now the first recording of sounds that have ever been made from interstellar space,” Gurnett says. “And these sounds are plasma oscillations so they have a very intense sound.” The tones of the sound waves confirmed that <sname>Voyager 1</sname> had crossed the heliopause, the boundary of the solar system’s bubble inflated by the solar wind. The gateway to the vast expanses of space between the stars opens here.
				</p>
				<aside class="audio">Audio of <sname>Voyager</sname> in interstellar space
					<!-- preloader -->
                    <div id="loader"></div>

                    <!-- the player -->
                    <div id="content" class="content">
                        <div id="player">
                            <div id="playBtn" class="button playBtn"></div>
                            <div id="labels">
                                <label id="song">Tape 8022, Track 02</label><br />                
                            </div>
                            <div id="track">
                                <div id="progress"></div>
                                <div id="thumb"></div>
                            </div>
                        </div>
                    </div>
				</aside>
				<p>For nearly a year, <sname>Voyager</sname> scientists debated whether they had crossed into interstellar space, with three instruments offering a mix of solid evidence and deep uncertainty. In May 2012, galactic cosmic ray levels jumped while solar wind particles dipped and the change escalated dramatically that summer. But the counts ebbed and the magnetic field of the sun continued to wrap <sname>Voyager</sname>. Scientists expected to break through to the interstellar magnetic field - <sname>Voyager</sname> carried a magnetometer to determine that and it didn’t happen. What now?
				</p>
				<aside class="in-text"><img alt="Looping animation of a cornoal mass ejection Aug. 15, 2014 from NASA" src="/vanallen/files/original/753519613e0230bc9ff591e8bc5ec14b.gif"><p class="caption">Looping animation of a cornoal mass ejection Aug. 15, 2014<br/>Credit: Coutresy of ESA&NASA/SOHO</p></aside>
				<p>The sun lent a hand with a <a href="http://www.nasa.gov/mission_pages/sunearth/news/News030712-X5-4.html" target="_blank">massive coronal ejection in March 2012.</a> The St. Patrick’s Day Solar Storms raged through the solar system, with jets of plasma streaming toward interstellar space and plowing into the interstellar plasma of galactic cosmic rays. When the impact hit, <sname>Voyager</sname> was there – on location – with Iowa’s plasma wave instrument to make the definitive discovery. <sname>Voyager</sname> scientists knew that the instrument could pick up the radio signals from plasma oscillations – or vibrations – triggered by the collisions. On April 9, 2013, the instrument tuned into the song of passage – radio waves at frequencies that correspond to interstellar space.
				</p>
				<aside class="fb-caption arrow_box">
					<header id="fbsymphony"><h4>Space symphony</h4></header>
                    <p class="caption">University of Iowa physicist Don Gurnett records the songs of space and recognized the change of tune that told us Voyager 1 had reached the destination of interstellar space in 2012. There, Gurnett heard the high-pitched harmonics of radio transmissions created when the solar plasma of charged particles from the sun slams into cosmic rays, the plasma of charged particles streaming from other stars. As an undergraduate, Gurnett tuned into whistlers - radio transmissions from the heavens generated by lightning flashes. He tracked whistlers from the corn fields of his father’s farm in Fairfield, Iowa, from the Injun 3 satellite orbits a thousand miles above the Earth and from Jupiter. The whistlers his plasma wave instrument on Voyager 1 picked up at Jupiter meant he had discovered lightning at another planet for the first time. His  radio receiver trundled onto the Injun 3 satellite in 1962 picked up the radio show generated by the Earth’s radiation belts – a dawn chorus of transmissions, so-named by British radio enthusiasts who compared similar but fainter such transmissions heard on Earth to the dawn chorus of flocks of birds. Gurnett’s plasma wave instrument on Voyager recorded a dawn chorus from the radiation belts at Jupiter as well. The device sang with transmissions from solar storms that Gurnett used to remap the distance to the boundary of the solar system. Then came the big prize – the first recordings from interstellar space.
                    </p>
				</aside>
				<p>"Normally, interstellar space is like a quiet lake," said <sname>Voyager</sname> project scientist Ed Stone in a NASA statement. "But when our sun has a burst, it sends a shock wave outward that reaches <sname>Voyager</sname> about a year later. The wave causes the plasma surrounding the spacecraft to sing."
				</p>
				<p>When you tune in to a radio station at 780 on your AM dial, it means the station is broadcasting at 780 kilohertz, a frequency where the rate of oscillation of the radio waves is 780 cycles per second. Gurnett detected and recorded electron plasma oscillations at the very low frequency of 2.6 kilohertz.
				</p>
				<p>“We literally jumped out of our seats when we saw these oscillations in our data – they showed us the spacecraft was in an entirely new region comparable to what was expected in interstellar space,” Gurnett noted when NASA announced the momentous crossing to uncharted territory. 
				</p>
				<p>The high-pitched whine of Gurnett’s recording identifies the increased density of interstellar plasma at a point where the density of solar plasma had dropped to nearly nothing. Analyzing the data, Iowa’s plasma wave team of Gurnett and physicist Bill Kurth chronicled the passage back to an exact date: Aug. 25, 2012.
				</p>
				<aside class="image"><p class="caption">Golden Record<br/>Credit: Courtesy of NASA</p><img alt="Image of gold record. Courtesy of NASA" src="/vanallen/files/fullsize/8e61ed816f5a79204e19cd1a5e6e49dd.jpg"></aside>
				<p><sname>Voyager 1</sname> had journeyed across the solar system for 35 years and more than 11 billion miles to reach that point. The spacecraft launched in 1977 with more than a dozen scientific instruments, two cameras, a thermonuclear power supply and Carl Sagan’s famous gold record that includes images, natural sounds, a time capsule of music, greetings spoken in 55 languages, printed messages and a cover plate with a map of the Earth’s position in the galaxy. The mission completed close encounters to explore Jupiter and Saturn in 1979 and 1980. Voyager 2 followed with flyby approaches to Jupiter, Saturn, Neptune and Uranus between 1979 and 1989. Between them, the twin Voyagers explored 48 of the moons of these outer planets. <a href="http://voyager.jpl.nasa.gov/science/planetary.html" target="_blank">Thousands of stunning photographs</a> gave people a front row seat to share Voyager’s spellbinding views.
				</p>
				<p>Where is <sname>Voyager 1</sname> now? The spacecraft registered what NASA called a “tsunami  wave” from another coronal mass ejection. The surge sang through the plasma wave instrument in March 2014 from some 12 billion miles away, confirming the continuing venture through interstellar space.
				</p>
				<p>“All is not quiet around <sname>Voyager</sname>,” Gurnett noted in NASA’s most recent chapter to the Voyager saga. The radio rhapsody is likely to continue with the solar system caught in the storm currents on an 11-year cycle when the sun reverses polarity. As for <sname>Voyager 2</sname>, it is still approaching the heliopause.
				</p>
				<p>Built for a 5-year mission, <sname>Voyager 1</sname> beat all the odds with less computing power than the average cell phone, project scientists point out. The camera and most of the instruments continue to function. <span class="pull">The Iowa wave instrument that tuned into the radio frequency of interstellar space evolved from a home-made radio receiver tested in a cornfield in 1962.</span>
				</p>
			</article>
			<article class="text-container" id="heavens"><header><h3>Catching the heavens whistling back</h3></header>
				<p>Only the crickets broke the stillness that April of 1962 as University of Iowa electrical engineering senior Don Gurnett headed across his father’s farm in Fairfax, Iowa. He carried a handmade radio receiver with a loop antenna. Gurnett came to the field to detect whistlers, the tones of natural, very low frequency radio waves produced by bursts of lightning.
				</p>
				<p>Safely beyond the power line interference of Iowa City, he sat in the velvet darkness of a clear spring night. He didn’t need a local storm. Whistlers from distant storms – guided by the Earth’s magnetic field – dart back and forth between the hemispheres and then funnel to Earth producing a stream of whistling sounds picked up by VLF receivers. With his receiver, Gurnett plugged into the heavens and caught them whistling back.
				</p>
				<aside class="video">Earth Whistlers
				    <!-- preloader -->
                    <div id="loader"></div>

                    <!-- the player -->
                    <div id="content" class="content">
                        <div id="player">
                            <div id="playBtn" class="button playBtn"></div>
                            <div id="labels">
                                <label id="song">Tape 8022, Track 02</label><br />                
                            </div>
                            <div id="track">
                                <div id="progress"></div>
                                <div id="thumb"></div>
                            </div>
                        </div>
                    </div>
                </aside>
				<p>Radio pioneers discovered whistlers in 1918 and a near mystical following of radio amateurs headed to the countryside to hear the musical tones and static hisses from on high. Gurnett learned about whistlers from a talk at the University of Iowa. He perfected his own design but carried it dejectedly back to Iowa City after the first night of his vigil in the fields. The receiver hadn’t picked up a thing. So he returned to the farm the next night. Hour after hour, he listened. Then suddenly, he picked up a series of faint whistling tones. Gurnett had big plans for the receiver after that. He just happened to have access to a spacecraft that could capture the radio songs of space.
				</p>
				<aside class="video"><p class="caption">ScienceCasts: The Sound of Earthsong</p><iframe width="560" height="315" src="//www.youtube.com/embed/MkTL2Ug6llE?list=UUKt6dYzHqHfpcp1lgj4bl1A" frameborder="0" allowfullscreen></iframe></aside>
				<p><span class="slide">The first semester of his freshman year, <sname>Sputnik</sname> launched</span><div class="toggle initiallyHidden"><img alt="line graph of Sputnik's counting rate in pulses per second" src="/vanallen/files/fullsize/98b0e4e0203468cf1b9718d61f2cc4ad.jpg"></div> and Gurnett decided to help springboard America’s leap into orbit. The tall, lanky boy heard about Van Allen and the basement space lab in the physics building so he walked over and asked for a job. Van Allen could sniff out a kid with a knack for electronics from about a mile away and hired him immediately. Gurnett eventually started working on Van Allen’s homegrown satellite, <sname>Injun I</sname>, the first university-built satellite to go into orbit. Gurnett, while still an undergraduate, advanced to the position of project engineer for <sname>Injuns 2</sname> and <sname>3</sname>. <sname>Injun 3</sname> resembled two mirror-finish domes fused at the middle, with solar cells lining part of the lightweight magnesium skin.
				</p>
				<p>His very low frequency receiver would fit like a crown on <sname>Injun 3</sname> and Gurnett asked permission to add it to the mission. Van Allen agreed but Gurnett suddenly realized that the receiver might blare with feedback from the satellite data receivers, acting as an amplifier that could cripple the mission. He had to test the system and, once again, he had to get away from the electrical power lines of Iowa City. Not a problem. The space physics team simply loaded up <sname>Injun 3</sname> with the VLF receiver and drove it to Fairfield to test it behind the Gurnett family barn. The system worked like a charm.
				</p>
				<aside class="audio">Audio from Gurnett Interview with Abigail
					<!-- preloader -->
                    <div id="loader"></div>

                    <!-- the player -->
                    <div id="content" class="content">
                        <div id="player">
                            <div id="playBtn" class="button playBtn"></div>
                            <div id="labels">
                                <label id="song">Tape 8022, Track 02</label><br />                
                            </div>
                            <div id="track">
                                <div id="progress"></div>
                                <div id="thumb"></div>
                            </div>
                        </div>
                    </div>
                </aside>
				<p><sname>Injun 3</sname> launched into orbit in December 1962 and the whistlers trapped in the Earth’s magnetic field sang loud and clear through the receiver with “all sorts of radio phenomena that frankly had never been heard before,” Gurnett said. Once inside the radiation belts, the receiver picked up a dawn chorus. British radio enthusiasts coined the term to describe a concert of natural radio tones they could pick up because it reminded them of the chorus of birds chirping when they awake at dawn. But the dawn chorus caught by VLF receivers on Earth couldn’t match the radio show from inside the belts and the chorus swelled dramatically with even mild solar storms. The songs of space gave Gurnett a new tool to explore the radiation belts and to follow the plasma of the solar wind.
				</p>
				<aside class="image"><p class="caption">Voyager Initial System Test at Cape Canaveral Air Force Station, Hangar AO<br/>Credit: Courtesy of NASA</p><img alt="overview photography of Voyager's initial system test at cape Canaveral Air Force Station. Image courtesy of NASA" src="/vanallen/files/fullsize/35970a5e855485a6f365758c52fb6435.jpg"></aside>
			</article>
			<article class="text-container" id="remapping"><header><h3>Remapping the solar system</h3></header>
				<p>Gurnett’s findings helped pioneer the field of plasma physics and remap the distance to the heliopause. Scientists had cautiously extended the boundary of the solar system farther and farther from the sun but estimates remained billions of miles off the mark. Then, the wave instrument caught the radio emissions from a raging solar storm.
				</p>
				<p>“In 1992-93, we detected a very intense radio emission” from <sname>Voyager</sname>, Gurnett says.  “For a long time we didn’t know where it was coming from. But we finally realized it was produced when a shock wave from a solar flare came out from the sun and reached this outer boundary that we call the heliopause. And we knew roughly the [speed] of the shock wave and that it took over a year - about 400 days – from the time of the explosion for this shock wave to reach the interstellar plasma. So we just did a calculation - distance equals speed times time. And we came up with a number of 116 to 177 astronomical units” to the heliopause.
				</p>
				<p><sname>Voyager</sname>, more than 5 billion miles from the sun at the time, sped onward. But Gurnett’s calculations told scientists that the highway to interstellar space covered a staggering 10.8 to 16.5 billion miles from the sun. Miles are “Detroit units,” meant for cars not spacecraft, Van Allen used to say. Distances in space are measured in those astronomical units – 1 AU adds up to 93 million miles, the distance from the Earth to the sun.
				</p>
				<aside class="image"><p class="caption">Rendering of <sname>Voyager I</sname> satellite<br/>Credit: Courtesy of NASA</p><img alt="NASA illustration of Voyager 1 satellite" src="/vanallen/files/fullsize/c8d61d372bea4bb29273a1264fc4db8e.jpg"></aside>
				<p><sname>Voyager</sname> found <a href="http://voyager.jpl.nasa.gov/multimedia/audiovideo/5_Solar_Wind_Interstellar_Wind-640.mov" target="_blank">the first hints of the heliopause </a>at approximately 11.2 billion miles from Earth, or 121 AU.
				</p>
				<p>But no one on the mission is saying we’ve left the solar system. Even after crossing the heliopause, the sun’s magnetic field continues to dominate. “We’re in a mixed transitional region of interstellar space,” said Ed Stone, former director of the Jet Propulsion Laboratory that built and operates <sname>Voyager</sname>. “We don’t know when we’ll reach interstellar space free from the influence of our solar bubble, Stone said in NASA’s announcement of the crossing. “What we can say is <sname>Voyager 1</sname> is bathed in matter from other stars.” Amid the star dust, scientists expect more surprises from <sname>Voyager</sname> before the power supply runs out between 2020 and 2025. After that, the spacecraft <a href="http://voyager.jpl.nasa.gov/where/index.html" target="_blank">heads onward,</a> a silent ghost ship like the <sname>Pioneers</sname> in its legacy.
				</p>
			</article>
			<article class="text-container" id="pioneers"><header><h3><sname>Pioneers</sname>: First ambassadors to the outer planets</h3></header>
				<aside class="in-text"><img alt="The Juno II rocket lifting off on March 3, 1959 successfully boosting the Pioneer 4 spacecraft. It was America's first probe to escape Earth's gravity, passing within 37,000 miles of the lunar surface." src="/vanallen/files/fullsize/5221f99e363cf85cd30b262ab4e80580.jpg"><p class="caption">The Juno II rocket lifts off on March 3, 1959 successfully boosting the Pioneer 4 spacecraft. It was America's first probe to escape Earth's gravity, passing within 37,000 miles of the lunar surface.<br/>Credit: Courtesy of NASA</p></aside>
				<p><sname>Pioneer 10</sname> and <sname>Pioneer 11</sname> trailblazed the way. Van Allen’s detectors on <sname>Pioneer 10</sname> confirmed the presence of massive radiation belts at Jupiter and found them to be furies of force. His detectors on <sname>Pioneer 11</sname> discovered the radiation belts at Saturn. There was plenty of glory to share. <sname>Pioneer 10</sname> sent back the first riveting close up images of Jupiter. Other instruments made new discoveries about the planet’s atmosphere, magnetic field and moons. <sname>Pioneer 11</sname> tapped momentum from Jupiter’s gravity to slingshot toward Saturn. In addition to the radiation belts, mission scientists discovered a new ring, another small moon and the disheartening realization that Titan is too cold to sustain life. And when <sname>Pioneer</sname> dipped beneath the rings of Saturn, the images melded scientific observation and transcendent surrealism.
				</p>
				<p>Van Allen followed <sname>Pioneer 10</sname> billions of miles past Jupiter, past Saturn, past Uranus, Neptune and Pluto, analyzing new cosmic ray findings with a 1972 Hewlett-Package graphics plotter sitting on his worn wooden desk in the new physics building – Van Allen Hall. Colleagues and friends who followed the faint whiff of pipe smoke into his seventh floor office could see the plotter spitting out charts and graphs from across half the solar system.
				</p>
				<p>Cosmic ray counts dropped as solar explosions blasted shock waves through the solar system, storms powerful enough to push back the incoming streams of cosmic rays. But the cosmic rays jetted forward once the sun calmed down and the counts rose again. <span class="pull">Rise and fall. Rise and fall. The cosmic ebb and flow pulsed like a heartbeat until Van Allen could see cosmic ray counts steadily rising despite solar storms by the time <sname>Pioneer 10</sname> called home for the last time from a distance of 8 billion miles away in 2003.</span>
				</p>
				<p>The swifter Voyagers had passed <sname>Pioneer 10</sname> by then but Van Allen’s readings told him <sname>Voyager 1</sname> must be closing in on a critical intermediate boundary of the solar system - just in time for the Iowa space family to return home to celebrate his 90th birthday.
				</p>
			</article>
			<article class="text-container" id="family"><header><h3>Space family reunion</h3></header>
				<aside class="image"><p class="caption">Dr. Wernher von Braun, left, John Casani of the Jet Propulsion Laboratory, center, and Dr. James Van Allen, inspect components of the Pioneer IV spacecraft on March 1, 1959.<br/>Credit: Courtesy of NASA</p><img alt="Dr. Wernher von Braun, left, John Casani of the Jet Propulsion Laboratory, center, and Dr. James Van Allen, inspect components of the Pioneer IV spacecraft on March 1, 1959" src="/vanallen/files/fullsize/cd31c0009de5022b75019bef02569d52.jpg"></aside>
				<p>On a warm October weekend in 2004, the pantheon of Van Allen’s space family returned to Iowa City for the birthday bash of the father of space science. Former students returned, now luminaries in a field they had helped develop across the globe. Ludwig, McIlwain, Gurnett, Gurnett’s administrative assistant Kathy Kurth and several others organized three days of festivities that kicked off with a cocktail party. Electronics technicians Lowell Swartz and Michael Nowack came from nearly towns and introduced themselves by their old nicknames Ugh 1 and Ugh 2. Their motto was the impossible just took a bit longer. “We’d go ugh and tackle the job,” Nowack said. Instrument maker Ed Freund reminisced about improvising parts and hunting down lightweight metals for Ludwig’s latest tape recorder design. Van Allen’s feisty former secretary Agnes McLaughin, who even warded off federal agents on one busy day, reminded eminent scientists of their student pranks as thought they were 18 again. Ludwig opened the colloquium the next day with the adventures of Explorer I, retelling a favorite story to an audience who would never tire of discovering new details. Stone, an Iowa native son, recounted the odyssey of <sname>Voyager</sname> <span class="slide">during a packed public lecture.</span><div class="toggle initiallyHidden"><img alt="" src="/vanallen/files/fullsize/5c42ffefe2aa4c366e941c1f1ff56bb8.jpg"></div>
				</p>
				<aside class="image"><p class="caption">Group photo from Van Allen Day Oct. 9, 2004<br/>Credit: U. of Iowa Photo Service</p><img alt="group photograph of attendees during Van Allen Day on October 9, 2004" src="/vanallen/files/fullsize/4b966f8870dc53d4fcdc9c5dda89d5f8.jpg"></aside>
				<p>But underlying all the festivities simmered a fierce debate over whether <sname>Voyager 1</sname> had crossed the inner boundary of the solar system – the termination shock. Here, the force of the solar wind began to subside and pool with cosmic gases. Had they crossed? Were the pitching waves of the termination shock rocking <sname>Voyager</sname> like a tiny raft caught in an ocean storm? Magnetic field readings on <sname>Voyager</sname> confirmed the inner crossing a few months later as Van Allen had predicted with the final messages from <sname>Pioneer 10</sname>.
				</p>
				<p>“It was one of Jim Van Allen’s top goals to reach the heliopause but Pioneer 10 just ran out of electrical power before we could get there,” says Gurnett, reflecting back on his friend, mentor and teacher. “He would have been thrilled to know we actually reached it.”
				</p>
				<br/>
				<div class="vanallen">
                    <div><img alt="Dr. James Van Allen during Van Allen day celebrations October 9, 2004" src="/vanallen/files/square_thumbnails/ac006caaa47d68dfb36149495bb35ce8.jpg"></div>
                    <div><img alt="George Ludwig giving an address for Van Allen Day" src="/vanallen/files/square_thumbnails/acf51034b5d0ca834651fbcbe660f96c.jpg"></div>
                    <div><img alt="Carl McIlwain giving an address for Van Allen Day" src="/vanallen/files/square_thumbnails/bafd5b10dccbc3e5d7ee8a72a583c074.jpg"></div>
                    <div><img alt="Dan Gurrnet giving an address for Van Allen Day" src="/vanallen/files/square_thumbnails/5eaf326449759befe7bb92fc677dbd06.jpg"></div>
					<div><img alt="Abigail Van Allen in conversation during Van Allen Day" src="/vanallen/files/square_thumbnails/ddd33f97d2b69dc7b75a144b10e294fb.jpg"></div>
					<div><img alt="James Van Allen smiling as he speaking with old collegues" src="/vanallen/files/square_thumbnails/5238a28a526d25f563c6de478f3d7fed.jpg"></div>
					<div><img alt="James Van Allen among the audience during the Van Allen Day presentations" src="/vanallen/files/square_thumbnails/4059e311c0640b21a4dfc230f1d523a9.jpg"></div>
					<div><img alt="The conclusion of Van Allen Day in McBride Hall. James Van Allen recieving award" src="/vanallen/files/square_thumbnails/3a5c7bbbf2d68e072b44e84dde32a7a7.jpg"></div>
					<div><img alt="Van Allen Day cake with the solar system in icing and the words Happy Birthday Dr. Van Allen" src="/vanallen/files/square_thumbnails/a1eeb47248de2eacc814a4ce46cfece6.jpg"></div>
                </div>
                <br/>
				<p>Van Allen applauded the victory of reaching the outpost of the termination shock and avidly followed the <sname>Voyagers</sname> among the litany of on-going missions with University of Iowa instruments.  But after a series of unexpected complications following surgery, Van Allen passed away on Aug. 9, 2006 just weeks before his 92nd birthday. He worked until the day before his surgery and finished final edits for two journal articles while in the hospital.
				</p>
				<p>His father had girt, his youngest son Peter Van Allen said at a packed memorial service in Hancher Hall on the University of Iowa campus. “And that really meant, if there was any kind of inspiration, it came after many long hours and, if there was genius, it was the result of many hours of toil applied to the same problem.”
				</p>
			</article>
			<article class="text-container" id="legacy"><header><h3>Fusion - The ultimate legacy</h3></header>
				<aside class="image"><p class="caption">Twin Van Allen Probs circling Earth to learn more about the Van Allen Radiation Belts 50 years later<br/>Credit: Courtesy of NASA</p><img alt="3D computer rendering of the Twin Van Allen probes circling Earth" src="/vanallen/files/fullsize/7c0c8f53feace34916e38754cb8a28be.jpg"></aside>
				<p>The discovery of the radiation belts extended our sense of the Earth’s environment thousands of miles beyond the atmosphere into the vast regions of the magnetic field – the magnetosphere. Without it, cosmic rays and the plasma from the sun could rip away the protective ozone layer that makes life on Earth possible. But the magnetosphere, like the belts within it, still holds vast mysteries for future explorers and both could reveal clues to unleash the power of controlled fusion reactors.
				</p>
				<p>The dawn chorus generated in the radiation belts sings one of those mysteries in the radio waves transmitted by the collisions of particles as jet streams of electrons spiral up and down within the belts. The chorus waves can stretch the tight spiral orbit of the electrons and spring them into the upper atmosphere, an escape route in nature that mimics the daunting struggle to confine plasma for controlled fusion on Earth.
				</p>
				<p><span class="pull">“At the time we heard these recordings from <sname>Injun 3</sname>, we didn’t completely realize the significance.  It was later shown that these waves that are generated in the radiation belt, they change the pitch – we call it the pitch angle” of particles, he says. “It’s one of the main mechanisms by which particles are lost in the radiation belts so it’s a very important physics problem.”</span> It’s also the biggest problem for controlled fusion reactors but almost impossible to track the causes at temperature levels hot enough to melt any probe. So we can study these processes with spacecraft and there’ve been great advances in our understanding of the instabilities that lead to the dawn chorus.”
				</p>
				<p>Simply put, If we can understand how particle are siphoned off from the radiation belts we would have a better understanding of how to confine them in a controlled fusion reaction.
				</p>
				<p>The fire in the heart of the sun creates the temperatures and pressure necessary for fusion – the source of all the energy that radiates from the sun. Fusion uses hydrogen – the most abundant material in the universe as fuel. Hydrogen normally has one electron and one proton. But the hydrogen that fuels the sun’s fusion furnace has two other forms - deuterium (with a proton and a neutron) and tritium (with a proton and two neutrons).  The sun fuses one of each, creating a helium atom with two neutrons and two protons. The process spins off the extra neutron to create more tritium and Einstein’s famous equation E=mc2 (energy equals mass times the speed of light squared) tells us the rest of the story. Even with the release of the stray neutron, the new helium nucleus has less mass than its other components – just a little less mass that converts to massive amounts of energy.
				</p>
				<aside class="video"><p class="caption">This NASA research model, prepared on March 15, 2013, from a space weather model known as ENLIL (Sumerian storm god), shows the way the CME was expected to travel toward Earth. The view on the left is top down, while the one on the right shows Earth from the side.<br/>Credit: Courtesy of NASA</p><iframe width="560" height="315" src="//www.youtube.com/embed/rCPdAnVlTTA" frameborder="0" allowfullscreen></iframe></aside>
				<p>The Earth’s surface collects about a millionth of the energy released at the surface of the sun. But that amounts to some 120 billion kilowatt-hours of energy per square mile of Earth each year, enough to meet current electrical needs of our planet with about 1,200 square miles if all of the energy could be collected, distributed and stored - big ifs with today’s technology. Controlled fusion continues to defy technology as well.
				</p>
				<p>Scientists have worked for nearly 70 years to magnetically confine plasma at temperatures and pressures to generate energy in a fusion reactor. The best they can do so far is break even. Mimicking the stars for an unlimited source of clean energy continues at the huge fusion laboratories such as the <a href="http://en.wikipedia.org/wiki/National_Ignition_Facility" target="_blank">National Ignition Facility</a> and <a href="http://en.wikipedia.org/wiki/ITER" target="_blank">ITER</a>.
				</p>
				<p>Baker, too, looks to the alternative on-location laboratory of space to tackle the fusion puzzle. “What’s magnificent about space physics – the field that was invented by Professor Van Allen - is that we can really go there” and make direct measurements. Now he plans to tap a laboratory in the Earth’s magnetic field via a space mission he’s planning with Kletzing and scientists from across the county. The <a href="http://www.nasa.gov/mission_pages/mms/index.html#.VAid8GPis24" target="_blank"><i>Magnetospheric Multiscale Mission</i></a> will tap into fundamental forces of the Earth’s magnetic field and the turbulence that rocks them during solar storms.
				</p>
				<aside class="video"><p class="caption">MMS Mission Trailer<br/>In March 2015, NASA will launch four identical spacecraft to study how magnetic fields around Earth connect and disconnect, explosively releasing energy -- a process known as magnetic reconnection.<br/>Credit: Courtesy of NASA</p><iframe width="560" height="315" src="//www.youtube.com/embed/ndBJpu-2KZ8" frameborder="0" allowfullscreen></iframe></aside>
				<p>The crossing, disconnection and reconnection of magnetic field lines in solar storm converts vast amounts of magnetic energy into bursts of kinetic and electric energy as solar storms of plasma collide with the Earth’s magnetic field.  The same processes in laboratories on Earth  may be another fundamental process disrupting efforts to achieve controlled fusion with magnetic containment of plasma. That’s one mystery the <i>Magnetospheric Multiscale Mission</i> would like to solve, Baker says.
				</p>
				<p>Clues to achieving controlled fusion that could be gleaned from the radiation belts and the magnetosphere may hold Van Allen’s future legacy.
				</p>
				<p>Still, the legacy closest to his heart was the legacy of his students - of hands working with him to build the instrument that became the eyes and ears taking space explorers to places where human beings cannot travel as yet.
				</p>
				<aside class="image"><p class="caption">1951 State University of Iowa emblem</p><img alt="1951 State University of Iowa emblem" src="/vanallen/files/fullsize/c950afc2b21793bfeb84a12d80a084de.jpg"></aside>
				<p>“The University of Iowa is one the few universities, particularly these days, that still builds space flight hardware and makes measurements. And that’s a tradition we’ve had here for a long time and we’re keeping it going and plan to keep it going,” Kletzing says. “We’re pretty committed to staying involved in building hardware that flies on missions. Part of the history here is that the best science gets done by the people who actually build the instruments and understand how they work and somebody has to train the next generation of people. Many of Van Allen’s students went off to build hardware elsewhere. The real legacy of any educational institution is preparing the next generation to find the next set of discoveries. Van Allen flew on Explorer I because he had an instruments he’d been flying on rockets and it was ready in sufficient time to get it onto a satellite after Sputnik sort of shocked people and we said, ‘Oops we better catch up.’”
				</p>
				<p>Catch up - and then some.
				</p>
			</article>
        </section>
		
		

		
		
        <!-- Section includes Factboxes and Castboxes 
               <section>
                <header class="fb" id="fbNASA"><h4>The birth of NASA</h4></header>
                    <p>The fight was on over the spring and summer of 1958 as James Van Allen clinched the discovery of the radiation belts and the army, navy and air force all planned competing space missions. Clearly, the United States needed a space agency. Eisenhower and a majority of scientists wanted it to be a civilian-led agency, in keeping with the mission of peaceful space exploration. Van Allen testified at the lengthy hearings chaired by Sen. Lyndon Johnson (D-Texas), one of dozens of witnesses. Van Allen promoted a strong role for universities in creating a national brain trust for civilian space exploration. The Explorers aside, he was a major stakeholder in an agency that would identify future missions. He had helped guide the way as chairman of a volunteer rocket panel representing all the civilian and military players to prioritize experiments for rocket flights starting with the V-2s at White Sands after World War II. The group morphed from the V-2 Panel, to the Upper Atmosphere Rocket Research Panel to the Rocket and Satellite Research Panel. His colleagues appointed him as chairman of the group early on and wouldn’t allow him to resign.  Van Allen’s detectors rode on Pioneer 1, one of five instruments on the first mission after NASA opened shop as a civilian agency on Oct. 1, 1958. But the military continued to play a key role. Pioneer, a U.S. Air Force probe, rocketed on a trajectory toward the moon, nearly 250,000 miles away. Pioneer I traveled a record 72,765 miles above the Earth and then fell back and disintegrated. That was enough for detectors designed by Van Allen and Carl McIlwain to fly through an entire swath of the inner and outer radiation belts for the first time.
                    </p>
                
                <header class="fb" id="fbcosmicray"><h4>How cosmic rays create time machines</h4></header>
                    <p>Cosmic rays striking atoms in the atmosphere trigger a cascade of reactions that create precision clocks for science. The reactions unleash neutrons that can interact with nitrogen atoms, kicking out a proton and taking its place in the nucleus. That transforms the nitrogen atom into an unusual form of carbon – carbon-14, with six protons and eight neutrons. Nitrogen atoms have seven protons and seven neutrons while carbon atoms, the building blocks of life, usually have six of each. Only living organisms absorb carbon – including carbon-14 – and they absorb it in consistent proportions. Changes in that proportion allow scientists to estimate the loss of carbon-14, an unstable isotope that decays away at a measurable rate. Carbon-14 dating give archeologists a tool to date bones, teeth, ancient garbage and other artifacts they find across thousands of year.
                    </p>
                    <p>Cosmic rays that do penetrate to the surface of the Earth generate beryllium-10, another isotope, when they strike rock and the buildup of beryllium-10 can tell climate scientists how long ago glaciers may have lumbered back from a rock buried in ice. They can do so because beryllium-10 doesn’t forms in an ice-covered rock. Beryllium-10 offers a calendar of the invasion and retreat of glaciers in the past, a calendar that helps build models needed to predict what we are facing with climate change now.
                    </p>
                
                <header class="fb" id="fbsymphony"><h4>Space symphony</h4></header>
                    <p>University of Iowa physicist Don Gurnett records the songs of space and recognized the change of tune that told us Voyager 1 had reached the destination of interstellar space in 2012. There, Gurnett heard the high-pitched harmonics of radio transmissions created when the solar plasma of charged particles from the sun slams into cosmic rays, the plasma of charged particles streaming from other stars. As an undergraduate, Gurnett tuned into whistlers - radio transmissions from the heavens generated by lightning flashes. He tracked whistlers from the corn fields of his father’s farm in Fairfield, Iowa, from the Injun 3 satellite orbits a thousand miles above the Earth and from Jupiter. The whistlers his plasma wave instrument on Voyager 1 picked up at Jupiter meant he had discovered lightning at another planet for the first time. His  radio receiver trundled onto the Injun 3 satellite in 1962 picked up the radio show generated by the Earth’s radiation belts – a dawn chorus of transmissions, so-named by British radio enthusiasts who compared similar but fainter such transmissions heard on Earth to the dawn chorus of flocks of birds. Gurnett’s plasma wave instrument on Voyager recorded a dawn chorus from the radiation belts at Jupiter as well. The device sang with transmissions from solar storms that Gurnett used to remap the distance to the boundary of the solar system. Then came the big prize – the first recordings from interstellar space.
                    </p>                
            </section>
			-->
		</div>

			<!-- /container -->
			
		<!-- 
            <div id="sources" class="text-container">
                <section class="section text-container">
                    <header><h2>Sources and Credits</h2></header>
                    <p>Website narrative by Abigail Foerstner. Content for many historic episodes draws on her biography, James Van Allen: The First Eight Billion Miles (University of Iowa Press).
					</p>
                </section>
			</div>
			
			-->
		<div class="top-arrow">
			<a href="#main"><div id="to-top"></div>
			<p class="to-top">Back to top</p></a>
		</div>
<?php echo foot(); ?>

