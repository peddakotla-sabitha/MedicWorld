<html>

<head>

<title>Medic World</title>

<link rel="stylesheet" href="mainstyle.css">

<!--...............bootstrap cdn...............................-->
<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"                                   integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-                          geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
<!--...................................................................logo.................................................-->
 <img src='logo3.png' width="120px" height="80px" align="left"></p>
<!--...................................................................navbar.................................................-->
<nav class="navbar navbar-expand-lg bg-dark navbar_custom me-3">
          <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mynav">
                      <span class="navbar-toggler-icon"></span>
          </button>
    <div class="navbar-collapse collapse" id="mynav">
           <ul class="navbar-nav ms-auto ">

                   <li class="nav-item mt-3  me-3">
                          <a href="#home" class="nav-link text-light">
                               HOME
                          </a>
                   </li>


                 <li class="nav-item dropdown mt-3 me-3">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             DRUGS
                        </a>
			<form action="side_effects.php" method="post">
                        <ul class="dropdown-menu ">
                               
				<li class="dropdown-item"><a href="z_amoxicillin.php" class="text-decoration-none text-dark">Amoxicillin</a></li>
				<li class="dropdown-item"><a href="z_aspirin.php"class="text-decoration-none text-dark">Aspirin</a></li>
				<li class="dropdown-item" ><a href="z_biotin.php" class="text-decoration-none text-dark">Biotin</a></li>
				
				
				<li class="dropdown-item"><a href="z_botox.php"class="text-decoration-none text-dark">Botox</a></li>
				<li class="dropdown-item"><a href="z_cetirizine.php" class="text-decoration-none text-dark">Cetirizine</a></li>
				<li class="dropdown-item"><a href="z_cipro.php"class="text-decoration-none text-dark">Cipro</a></li>
				<li class="dropdown-item"><a href="z_diclofenac.php"class="text-decoration-none text-dark">Diclofenac</a></li>	
				<li class="dropdown-item"><a href="z_droperidol.php"class="text-decoration-none text-dark">Droperidol</a></li>
				
				</form>
			</ul>
		</li>
     		 <li class="nav-item mt-3 me-3">
                         <a href="contactus.php" class="nav-link text-light">
                           CONTACT US
                         </a>
                 </li>
		<li class="nav-item mt-3 me-3">
                         <a href="aboutus.php" class="nav-link text-light">
                           ABOUT US
                         </a>
                </li>
		<li class="nav-item mt-3 me-3">
                         <a href="faq.php" class="nav-link text-light">
                           FAQ
                         </a>
                </li>
		  <li class="nav-item mt-3 me-3">
                         <a href="pill_identifier.php" class="nav-link text-light">
                          <div class="input-group-text bg-dark text-white text-outline-dark" title="upload your profile"><i class="fa-solid fa-user"></i></div>
                         </a>
                  </li>

		
	  </ul>
    </div>
</nav>
<div class="container mt-3">
		<form action="side_effects.php" method="post">
			<div class="input-group">
				<input type="search" class="form-control" placeholder="enter a drug name to know side efffects ex:paracetamol" 						name="drug">
<button><span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span></button>
</div>
<div class="form-text " style="font-weight: bold;">enter only lower case letters</div>
</form>
</div>

<div class="mt-4 mb-4">
	<div class="carousel slide " id="carouselexample" data-bs-ride="carousel" data-bs-interval="1000">
		<div class="carousel-indicators">
			<button type="button" class="active text-bg-dark" data-bs-target="#carouselexample" data-bs-slide-to="0">
			</button>

			<button type="button" class="text-bg-dark" data-bs-target="#carouselexample" data-bs-slide-to="1">
			</button>

			<button type="button"class="text-bg-dark" data-bs-target="#carouselexample" data-bs-slide-to="2">
			</button>
			<button type="button"class="text-bg-dark" data-bs-target="#carouselexample" data-bs-slide-to="3">
			</button>
		</div>
		<div class="carousel-inner position_carousel">
			<div class="carousel-item active">
				<img src="z1.jpg " width="1300px" height="500px">
			</div>
			<div class="carousel-item">
				<img src="z2.jpg" width="1300px" height="500px">
			</div>
			<div class="carousel-item">
				<img src="z3.jpg"  width="1300px" height="500px">
			</div>
			<div class="carousel-item">
				<img src="z4.jpg"  width="1300px" height="500px">
			</div>
		</div>

		
	</div>
</div>




















<div class="container" id="home"> <!--.........................................ROW1........................................................-->
		<div class="row">
<!--..............................................................FEVER CARD......................................................-->
				<div class="card col-3 mt-3">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#fever">	
								<img src="z1fever.png" width="250px" height="180px">	
						</button>
					<div class="card-body">
						<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
					             	Fever
						</div>
					</div>
				</div>
<!--..............................................................MIGRAINE CARD......................................................-->
				<div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#migraine">
								<img src="z2migraine.png" width="250px" height="200px">
						</button>
					<div class="card-body">
						<div class="card-heading text-center card_font bg-primary text-white" >
							Migraine
						</div>
					</div>
				</div>
<!--..............................................................ALLERGIES CARD......................................................-->
			       <div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#allergies">	
								<img src="z3allergy.png" width="250px" height="180px">
						</button>
						<div class="card-body">
							<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
								Allergies
							</div>
						</div>
				</div>
<!--......................................................................ARTHRITIS CARD...................................................-->
				<div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#arthritis">	
								<img src="z4arthritis.png" width="200px" height="180px">
                                            	</button>
						<div class="card-body">
							<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
									Rheumatoid Arthritis
						        </div>
						</div>
  				</div>
		</div>
</div>

<div class="container"> <!--.........................................ROW2........................................................-->
		<div class="row">
<!--..............................................................COLD CARD......................................................-->
				<div class="card col-3 mt-3">
					<button class="btn" data-bs-toggle="modal" data-bs-target="#cold">				
							<img src="z5cold.png" width="250px" height="180px">
					</button>
					<div class="card-body">
							<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
								Cold and Flu
							</div>
					</div>
				</div>
<!--..............................................................COUGH CARD......................................................-->
				<div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#cough">	
							<img src="z6cough.png" width="250px" height="200px">
						</button>
						<div class="card-body">
							<div class="card-heading text-center card_font bg-primary text-white" >
								Cough
							</div>
						</div>
				</div>
<!--..............................................................STOMACH ACHE CARD......................................................-->
				<div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#stomach">		
							<img src="z7stomachache.png" width="250px" height="180px">
						</button>
						<div class="card-body">
							<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
								Stomach Pain
							</div>
						</div>
				</div>
<!--......................................................................DIARRHEA CARD...................................................-->
				<div class="card col-3 mt-3 ">
						<button class="btn" data-bs-toggle="modal" data-bs-target="#diarrhea">
						     	<img src="z8diarrhea.png" width="200px" height="180px">
 						</button>
						<div class="card-body">
							<div class="card-heading text-center card_font mt-3 bg-primary text-white" >
								Diarrhea
							</div>
						</div>
				</div>

		</div>
</div>


<!--......................................................................FEVER MODAL...................................................-->

<div class="modal" data-bs-backdrop="static" id="fever">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
					FEVER	
				</div>
				<button class="btn-close bg-light"data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
					A person has a fever if their body temperature rises above the normal range of 98–100°F (36–37°C). It is a   
							 common sign of an infection.<br>

					As a person’s body temperature increases, they may feel cold until it levels off and stops rising. People 								describe this as “chills.”<br>

					<u>Symptoms:</u><br>
						When someone has a fever, they may also:<br>
						shiver and feel cold when nobody else does<br>
						sweat<br>
						have a low appetite<br>
						show signs of dehydration<br>
						have increased sensitivity to pain<br>
						lack energy and feel sleepy<br>
						have difficulty concentrating<br>

					If a baby has a fever, they may:<br>

						feel hot to the touch<br>
						have flushed cheeks<br>
						be sweaty or clammy<br>
						With a high fever, there may also be irritability, confusion, delirium, and seizures.<br>

					A mild fever is part of the immune system’s response to bacteria, viruses, and other pathogens. It helps the 							body fight off infection.<br>
					<u>Medications:</u><br>
					In the case of a high fever or a fever that causes discomfort, your care provider may recommend 					nonprescription medication, such as acetaminophen (Tylenol, others) or ibuprofen (Advil, Motrin IB, others). 						Use these medications according to the label instructions or as recommended by your health care provider.<br>

					<u>Drugs used to treat fever</u><br>
						Acetaminophen and Propoxyphene,
						Acetaminophen or Paracetamol,
						Aspirin etc...

					to know more click on a button
			</div>
		   <div class="modal-footer">
			<button class="btn btn-outline-light" data-bs-dismiss="modal">	
				close
			</button>
			
		   </div>
	    </div>
      </div>
</div>
<!--......................................................................MIGRAINE MODAL...................................................-->

<div class="modal" data-bs-backdrop="static" id="migraine">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
					MIGRAINE
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
					Migraine is a very common, but very particular, type of headache. Most people who have migraine experience 						repeated attacks of headaches that occur over many years. <br>The typical migraine headache is throbbing or 						pulsating, and often is associated with nausea and changes in vision. While many migraine headaches are 					severe, not all severe headaches are migraines, and some episodes can be quite mild.<br>
					A migraine usually is a throbbing headache that occurs on one or both sides of the head. The headache 						typically is accompanied by nausea, vomiting or loss of appetite<br>

					<u>Medications:</u><br>
					Many medications have been designed to treat migraines. Medications used to combat migraines fall into two 						broad categories:<br>

					Pain-relieving medications. Also known as acute or abortive treatment, these types of drugs are taken during 						migraine attacks and are designed to stop symptoms.<br>
					Preventive medications. These types of drugs are taken regularly, often daily, to reduce the severity or 						frequency of migraines.<br>

					Drugs like sumatriptan (Imitrex, Tosymra), Lasmiditan (Reyvow), Intranasal zavegepant (Zavzpret), Botox 					injections are used.


			</div>
		   <div class="modal-footer">
			<button class="btn btn-outline-light" data-bs-dismiss="modal">	
				close
			</button>
			
		   </div>
              </div>
         </div>
</div>

<!--......................................................................ALLERGIES MODAL...................................................-->
<div class="modal" data-bs-backdrop="static" id="allergies">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
					ALLERGIES
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body ">
					Allergies are an immune response triggered by allergens, an ordinarily harmful substance.<br>

					<u>Causes</u><br>
					People with allergies have especially sensitive immune systems that react when they contact allergens.<br>

					Common allergens include:<br>

					foods (nuts, eggs, milk, soy, shellfish, wheat)<br>
					pollen<br>
					mold<br>
					latex<br>
					pet dander<br>
					<u>Symptoms</u><br>
					Because there are so many possible causes, the symptoms of allergies vary widely. Airborne allergens, like 						pollen and pet dander, are likely to cause:<br>

					Eye irritation<br>
					Runny nose<br>
					Stuffy nose<br>
					Puffy, watery eyes<br>
					Sneezing<br>
					Inflamed, itchy nose and throat<br>
					Allergens that are consumed, like foods or certain medications, can cause:<br>

					Hives or skin rashes<br>
					Gastrointestinal distress (diarrhea, nausea, vomiting, excessing gas, indigestion)<br>
					Tingling or swelling of the lips, face, or tongue<br>
					Itchiness<br>
					Difficulty breathing or wheezing<br>
					Fainting/ or lightheadedness<br>
					In cases of a more extreme response, called anaphylaxis, symptoms are severe and life-threatening.<br>

					<u>Medications</u><br>
					The easiest and most effective way to treat allergies is to get rid of or avoid the cause. Where unavoidable, 						some lifestyle changes can reduce your allergy symptoms. For example, if you are allergic to dust mites, make 					        an effort to keep your room clean and free of dust by frequent vacuuming, dusting, and washing of bedding.<br>

					For pollen allergies, avoid being outside when pollen counts are high and keep the windows to your room 					shut.<br>

					Because it is very difficult to avoid certain allergens, medication may be necessary to lessen symptoms caused 						by allergens, other than food and drugs.

					Antihistamines: help relieve or prevent the sneezing, itchy eyes and throat, and postnasal drip that the 						allergen may cause. They are sold in many forms (i.e., pills, nasal sprays, liquids, etc.).<br>
					Decongestants: help reduce congestion in your nasal membranes by narrowing the blood vessels that supply those 						membranes. They can be purchased in several forms (liquid, pill or nasal spray) and may be used with an 					antihistamine or alone to treat nasal swelling related to allergies.  Limit use of nasal sprays to fewer than 						two to three days in a row because prolonged use can cause the nasal membrane swells, resulting in severe 						nasal obstruction. <br>

					Anti-inflammatory agents (e.g., corticosteroid): help reduce swelling of the airways, nasal congestion and 						sneezing. Typically taken as a nasal spray. Some people report that corticosteroids irritate nasal 						passages.<br>

					Allergy shots: recommended for serious allergy sufferers, this series of shots are administered by a 						healthcare provider and contain small amounts of the allergens that cause you discomfort. The goal of allergy 						shots is to enable your immune system to build better defenses against allergens.<br>

					<u>Drugs used to treat allergies:</u><br>
					Cetirizine (Zyrtec, Zyrtec Allergy),
					Desloratadine (Clarinex),
					Fexofenadine (Allegra, Allegra Allergy),
					Levocetirizine (Xyzal, Xyzal Allergy),
					Loratadine (Alavert, Claritin)

			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">	
					close
				</button>
				
			</div>
		</div>
	</div>
</div>
<!--......................................................................ARTHRITIS MODAL...................................................-->
<div class="modal" data-bs-backdrop="static" id="arthritis">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
						Rheumatoid Arthritis
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
				Rheumatoid arthritis is a chronic inflammatory disorder that can affect more than just your joints. In some people, 					the condition can damage a wide variety of body systems, including the skin, eyes, lungs, heart and blood vessels.<br>

				An autoimmune disorder, rheumatoid arthritis occurs when your immune system mistakenly attacks your own body's 					tissues.<br>

				Unlike the wear-and-tear damage of osteoarthritis, rheumatoid arthritis affects the lining of your joints, causing a 					painful swelling that can eventually result in bone erosion and joint deformity.<br>

				The inflammation associated with rheumatoid arthritis is what can damage other parts of the body as well. While new 					types of medications have improved treatment options dramatically, severe rheumatoid arthritis can still cause 					physical disabilities.<br>
				<u>Symptoms</u><br>
				Signs and symptoms of rheumatoid arthritis may include:<br>

				Tender, warm, swollen joints<br>
				Joint stiffness that is usually worse in the mornings and after inactivity<br>
				Fatigue, fever and loss of appetite<br>
				<u>Medications:</u><br>
				1. NSAIDs<br>
				Most people with RA are advised to take a non-steroidal anti-inflammatory drug to decrease pain and inflammation. 					NSAIDs are sold over-the-counter, under such names as Advil and Aleve, as well as by prescription, under names such as 					Mobic and Celebrex<br>
				2. Steroids (Corticosteroids)<br>
				Fast-acting steroids, such as prednisone, are particularly useful during initial treatment, before other RA 					medications have had a chance to take effect (often 12 weeks or more).<br>

				One advantage of steroids is that they can be injected into joints. Injected steroids can provide targeted pain relief 					to one or two painful joints with limited side effects.<br>

				Experts recommend taking the lowest possible dose of steroids and advise against relying on them longer than 					necessary. Steroids’ effectiveness often diminishes over time—meaning the longer a person takes a steroid, the less 					likely it is to relieve symptoms. In addition, people who take steroids continuously for several months or years can 					experience side effects such as weight gain, increases in blood pressure, diabetes, and heart disease.<br>
				3. Methotrexate and Other Traditional DMARDs<br>
				Disease-modifying antirheumatic drugs (DMARDs) are used used to slow or stop rheumatoid arthritis by suppressing the 					immune system. The generic names for commonly used DMARDs include:<br>

				Hydroxychloroquine<br>
				Methotrexate<br>
				Sulfasalazine<br>
				Azathioprine<br>
				Lefludomide<br>
				Methotrexate is often the first drug prescribed for people newly diagnosed with rheumatoid arthritis. RA patients take 					this medication weekly, alone or in combination with other medications.<br>

				High dose methotrexate is also used to treat some cancers. RA patients take significantly lower doses than cancer 					patients.
				4. Biologics for Rheumatoid Arthritis<br>
				This class of medications, called biologic response modifiers, is technically a subset of DMARDs. They may be used 					with traditional DMARDs or as an alternative to them. Biologics:<br>

				Disrupt certain parts of the cascade of events that lead to RA inflammation and have the potential to stop the disease 					process.
				Increase a person’s risk of infection and tend to be expensive. Because of these potential downsides, biologics are 					used when methotrexate or other DMARDs prove insufficient or cause unacceptable side-effects.<br>
				May become less effective and/or cause worsening side effects over time. The doctor and patient can work together to 					monitor changes and decide if and when switching medication is advisable.<br>
				5. Janus Kinase (JAK) Inhibitors<br>
				AK enzymes are essential messengers in the immune system’s inflammatory process. When JAK enzymes bind with other 					cells, called X cells, they trigger inflammation. JAK inhibitors bind to JAK enzymes, preventing them from binding 					with X Cells and stopping the inflammatory process.<br>
				he first FDA-approved JAK inhibitor is called Tofacitinib, and it is sold under the names Xeljanz and Xeljanz XR 					(extended release).<br>

				As with biologic mediations, people considering taking JAK inhibitors must have a tuberculosis test.<br>

				People taking JAK inhibitors are advised to work with their doctors to monitor risks and side effects.<br>
				<u>Drugs used to treat rheumatoid arthritis:</u><br>
				hydroxychloroquine sulfate,
				leflunomide,
				methotrexate,
				tofacitinib
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">
               				close
				</button>
				
			</div>
		</div>
	</div>
</div>

<!--......................................................................COLD MODAL...................................................-->

<div class="modal" data-bs-backdrop="static" id="cold">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
					COLD and FLU
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">
			   	</button>
			</div>
			<div class="modal-body">
				Colds and influenza (flu) are the most common illnesses among college students. <br>
				Both of these illnesses are upper respiratory infections, meaning they involve your nose, throat, and lungs. Viruses 					cause both colds and flu by increasing inflammation of the membranes in the nose and throat.<br>

				Most transmission of these viruses occurs via hand-to-hand contact.<br>

				<u>Symptoms</u><br>
				Flu symptoms come on suddenly and affect the body all over. Flu symptoms are usually more serious than a cold and 					include:<br>

				fever (100° F),<br>
				headache,<br>
				more intense pain and fatigue, and<br>
				more severe, often dry cough.<br>
				When you get the flu, you are also more prone to bronchitis, sinus, and ear infections. <br>

				Cold symptoms mostly affect above the neck and include:<br>

				a runny or stuffy nose (nasal congestion),<br>
				sneezing,<br>
				sore throat, and<br>
				cough. <br>
				You may also experience a mild headache, body aches or a low grade fever. Typically, a cold lasts 2-14 days.<br>

				Treatment<br>
				If any problem is causing you discomfort, you should seek medical care.<br>

				Seek medical attention promptly if you have:

				a fever of 102° F or greater (which may indicate a more serious infection),<br>
				a persisting cough, especially with a significant fever (which could indicate pneumonia),<br>
				a persistent sore throat (especially if runny nose does not develop - which could indicate a strep infection), or<br>
				any cold lasting more than 10 days.<br>
				Because colds and flu are caused by viruses, they cannot be cured by antibiotics. There are tips to help you feel 					better and strengthen your immune system to fight illness:<br>

				Rest more than usual and avoid exercise until symptoms are gone.<br>
				Drink lots of clear fluids (e.g., water, tea).<br>
				Stay away from cigarette smoke.<br>
				Do not take antibiotics unless specifically prescribed for you to cure the illness from which you currently suffer.<br>
				Avoid drinking alcohol because it weakens your immune system and may interact with medications.<br>
				Avoid caffeine, which can increase congestion and dehydration.<br>
				Eat a well-balanced diet, including fruits, vegetables, and grains.<br>
				More Specific Remedies for Comfort<br>
				RUNNY NOSE/CONGESTION:<br>
				Decongestants (e.g. pseudoephedrine) can relieve a runny nose and congestion, but these medications can inhibit sleep 					and suppress appetite.
				Salt water nasal sprays (e.g. NaSal or Ocean) can ease nasal congestion and thin mucus. However, excessive use of 					medicated nose sprays, like Afrin, can cause dependence and may make congestion worse.<br>
				Humidifiers and hot showers can help to moisten nasal passages and clear mucus.<br>

				<u>Drugs used to treat rheumatoid arthritis:</u><br>
				oxymetazoline nasal (Afrin, Dristan 12-Hour Nasal Spray),
				phenylephrine nasal (Neo-Synephrine),
				phenylephrine oral (Sudafed PE, Triaminic Multi-Symptom Fever and Cold),
				pseudoephedrine (Sudafed).
				Rapivab (peramivir),
				Relenza (zanamivir),
				Tamiflu (oseltamivir phosphate, also available as generic),
				Xofluza (baloxavir marboxil)

			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">
					close
				</button>
				
		 	</div>
		</div>
	</div>
</div>
<!--......................................................................COUGH MODAL...................................................-->
<div class="modal" data-bs-backdrop="static" id="cough">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">COUGH</div>
					<button class="btn-close bg-light" data-bs-dismiss="modal">
					</button>
				</div>
				<div class="modal-body">

					A cough is your body's way of responding when something irritates your throat or airways. An irritant 						stimulates nerves that send a message to your brain. The brain then tells muscles in your chest and abdomen to 						push air out of your lungs to force out the irritant. An occasional cough is normal and healthy.<br>

					It can also occur with other signs and symptoms, including:<br>

					A runny or stuffy nose<br>
					A feeling of liquid running down the back of your throat (postnasal drip)<br>
					Frequent throat clearing and sore throat<br>
					Hoarseness<br>
					Wheezing and shortness of breath<br>
					Heartburn or a sour taste in your mouth<br>
					Rarely, coughing up blood<br>
					<u>Medications for Cough</u><br>
					benzonatate,
					Mucinex,
					Benadryl,
					guaifenesi,n
					Promethazine DM.
				</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">	
					close
				</button>
				
			</div>
		</div>
	</div>
</div>

<!--......................................................................COUGH MODAL...................................................-->
<div class="modal" data-bs-backdrop="static" id="stomach">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">	
					Stomach Pain
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">	
				</button>
			</div>
			<div class="modal-body">

				Intestinal Gas<br>
				It’s natural to have gas in your digestive tract, and to pass gas regularly. In fact, everyone passes gas at least 12 					times a day, which is a combination of oxygen, hydrogen, nitrogen, carbon dioxide, and methane. The unpleasant odor of 					flatus is cause by gases (e.g. hydrogen sulfide) produced by the bacteria in the large intestine. Even though it’s 					natural to have gas in your digestive tract, excessive gas can cause intense, temporary pain. People who suffer 				discomfort from gas in the intestine report abdominal bloating, flatulence, and jabbing pains or cramps in the 					abdomen. Intestinal gas can mimic the pain associated with real illnesses, like gallbladder disease, heart disease, 					and appendicitis, but be aware that it can also signal other illnesses, such as stomach flu or food poisoning.<br>

				The best treatment for gas focuses on the cause. Although there are several over-the-counter medications that 					advertise gas relief, they do not work for everyone and may have side effects. Medications that have been shown to 					effectively reduce gas use simethicone, a substance that helps gas be expelled through belching or passing flatus (it 					does not make gas dissolve or disappear). Activated charcoal preparations may also be helpful. While these medications 					are good for short-term immediate relief, the best step for long-term comfort is to find out what causes you gas.<br>

				There are two general causes of gas: swallowed air and the breakdown of undigested foods by harmless bacteria in the 					large intestine. Everyone swallows air when they eat and drink, but these activities are likely to increase the amount 					ingested:<br>

				Eating or drinking rapidly<br>
				Drinking through a straw<br>
				Chewing gum or eating hard candy<br>
				Smoking<br>
				Food triggers vary from person to person, but the types of food that seem to cause the most problems are those that 					are high in fiber or lactose. Foods that may cause gas include:<br>

				Beans<br>
				Peas<br>
				Lentils<br>
				Cabbage<br>
				Broccoli<br>
				Brussels sprouts<br>
				Milk products (if you lack adequate amounts of the enzyme lactase)<br>
				Onions<br>
				Wheat<br>
				Carbonated beverages<br>
				Sorbitol (artificial sweetener) and fructose (found in corn syrup)<br>
				To prevent gas:<br>

				Avoid foods that trigger gas.<br>
				Avoid swallowing excess air by not chewing gum or eating hard candy.<br>
				Take digestive enzyme supplements, such as Beano (for high-fiber foods) and lactase supplements (for milk 						products).<br>
				Eat only small amounts of dairy products with food, if you suspect lactose intolerance.<br>
				Eat several small meals throughout the day instead of two or three larger ones.<br>
				Eat slowly, in a relaxed setting, and chew your food thoroughly.<br>
				Take a stroll after meals. Don’t sit in a slumped position or lie down after eating.<br>
				If increasing the fiber in your diet, do so gradually<br>
				Exercise to facilitate the passage of gas through the digestive tract.<br>
				<u>Symptoms</u><br>
				Flatulence (passing of gas)<br>
				Belching<br>
				Indigestion<br>
				Discomfort in the upper left or right; middle; or lower left or right abdomen<br>
				Constipation<br>
				Diarrhea<br>
				Heartburn<br>
				Chest discomfort<br>
				<u>Drugs used to treat stomach ache</u><br>
				Simethicone: Cures stomach ache due to gas in the stomach<br>
				Antacid: Cures stomach ache due to hyperacidity<br>
				Famotidine: Cures stomach ache due to hyperacidity<br>
				Ranitidine: Cures stomach ache due to hyperacidity<br>
				Docusates: Cures stomach ache due to constipation<br>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">
					close
				</button>
				
			</div>
		</div>
	</div>
</div>

<!--......................................................................DIARRHEA MODAL...................................................-->
<div class="modal" data-bs-backdrop="static" id="cough">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content bg-dark text-light">
			<div class="modal-header">
				<div class="modal-title card_font">
					DIARRHEA
				</div>
				<button class="btn-close bg-light" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
		
				When you have diarrhea, your bowel movements (or stools) are loose and watery. It’s common and usually not serious.<br>

				Many people get diarrhea a few times a year. It normally lasts 2 to 3 days. Some people get it more often. That could 					be because they have irritable bowel syndrome (IBS) or other conditions.<br>

				Diarrhea Causes<br>
				Usually, diarrhea happens because of a virus that gets into your gut. Some people call it "intestinal flu" or "stomach 					flu."<br>

				Other causes include:<br>

				Allergies to certain foods<br>
				Diseases of the intestines (such as Crohn's disease or ulcerative colitis)<br>
				Eating foods that upset the digestive system<br>
				Infection by bacteria (the cause of most types of food poisoning) or other organisms<br>
				Laxative abuse<br>
				Running (Some people get “runner’s diarrhea” for reasons that aren’t clear.)<br>
				Some cancers<br>
				Surgery on your digestive system<br>
				Trouble absorbing certain nutrients, also called “malabsorption”<br>
				Diarrhea may also follow constipation, especially for people who have irritable bowel syndrome (IBS).<br>

				<u>Diarrhea Symptoms</u><br>
				You may have:<br>
				Bloating in your belly<br>
				Thin or loose stools<br>
				Watery stools<br>
				An urgent feeling that you need to have a bowel movement<br>
				Nausea and throwing up<br>
				<u>Medications</u><br>
				Drugs used to treat Diarrhea<br>
				The following list of medications are in some way related to or used in the treatment of this condition.<br>
				loperamide<br>
				Lomotil<br>
				Imodium<br>
				atropine / diphenoxylate<br>
				Imodium A-D<br>
			</div>
			<div class="modal-footer">
				<button class="btn btn-outline-light" data-bs-dismiss="modal">
					close
				</button>
				
			</div>
		</div>
	</div>
</div>


<!--.........................................................carousel.....................................................-->



</body>
</html>
