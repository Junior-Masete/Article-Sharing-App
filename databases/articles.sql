BEGIN;
CREATE TABLE IF NOT EXISTS `articles` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    category_id INT NOT NULL,
    title  VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image_path VARCHAR(255),
    publication_date DATE,
    last_modified TIMESTAMP
);
INSERT INTO articles VALUES(1, 1,1 , 'Why Your Cat Is Weird', 'When cats became cats, the reason ‘pspspsps’ causes mayhem, and how to pet your feline overlord in precisely the right way (according to science).', 'Ever wonder what makes your cat knead you incessantly or knock over anything in reach at 4 a.m.? Dive into the science behind some of your feline companion’s weirdest behavior, from why an empty box is irresistible to what makes catnip send them to the moon.','article/https __s3.amazonaws.com_pocket-collectionapi-prod-images_2f35b047-dc7e-4012-bdd7-84ad7eb75e36.png', '2023-09-09', '2023-09-09 14:30:45' );
INSERT INTO articles VALUES(2, 1, 1, 'Retailers Bet Wrong on America’s Feelings About Stores', 'The internet was supposed to kill in-person shopping. But have you been to a Bass Pro?','The Bass Pro Shops is bigger than you think it will be. This is true of all of the outdoorsy retailer’s locations, but it’s especially true of the one retrofitted into a 32-story metal pyramid on the banks of the Mississippi River. Located in downtown Memphis, Tennessee, the mammoth structure once held an arena for the NBA’s Memphis Grizzlies. Now it houses the largest Bass Pro Shops in the world, a hunting-, fishing-, and camping-gear store that has been merchandised with Disney-level production values and expanded to encompass a hotel with more than 100 rooms, a wild-game-themed outpost of the Wahlburgers restaurant chain, several enormous lake sturgeon swimming in shallow pools between departments, and at least three live alligators, among other things.', 'articles/623e493658986.png', '2022-09-08', '2022-09-10 14:30:45');
INSERT INTO articles VALUES(3, 1,2, 'High-Protein Alternatives to Meat', 'Tasty protein with fewer carbon emissions.', 'Cutting out meat and replacing it with plants could have a huge carbon-cutting effect. In fact, according to a report covered by Popular Science in 2020, “the most effective regimens [for cutting climate changing-causing emissions] were veganism, which swaps meats out for plants, and a low-food-chain plan, which swaps them for insects, foraging fish, and bivalves.” In general, foods “that are low on the food chain don’t require feed-based agriculture, so their net emissions are generally low.” Luckily, there are a variety of plant-based, high-protein foods for our gustatory pleasure. Here are just a few: ', 'articles/618b36d19b0e4.png', '2015-09-09', '2015-09-09 14:30:45');
INSERT INTO articles VALUES(4, 1,3, 'Behind the Accidentally Resilient Design of Athens Apartments', 'Athens polikatoikias—concrete apartments with tiered balconies—were built quickly to create affordable housing, but their design has stood the test of time.', ' On first glance, a typical Athens polikatoikia doesn’t necessarily look like the answer to a host of urban issues. Built quickly and on the cheap — mainly from the 1950s to the 1980s — these modernist apartment buildings (pronounced “Pol-i-kat-i-KEE-A”) line street after street in the Greek capital, their repeated concrete facings and endless lines of unfurled balcony awnings giving the city an appearance of remarkable consistency. They may lack the elegance of Athens’ earlier neo-classical housing, but they have helped to create a city that is vibrant, socially integrated and (until recently) affordable, in which most residents’ housing offers broadly good living conditions. It’s probably fair to say, however, that the buildings have managed all this more or less by accident.
When the polikatoikias (the term simply means condominium) were spreading across Athens in the 1950s, they did so in a city with urgent housing needs and little money to spend. At the time, people were flooding to Athens from the provinces — a trans-European phenomenon made more intense in Greece by the civil war that finally ended in 1949, which provoked many to flee a partly devastated countryside. New Athenians needed homes fast, but the state lacked the funds and will to construct public housing, and banks were offering few loans.
To solve this conundrum, Greeks created their own funding system called antiparochi, in which developers saved themselves the cost of buying land by giving landowners a share of the constructed units when they were completed. “The best translation of the term is probably ‘flats for land,’ or as some people say, ‘quid pro quo,’” says Panos Dragonas, an architect and professor at Greece’s University of Patras. “The system saw landowners hand over their property, and in return get, say, two to five apartments back in the completed building to live in, or rent or sell. It was a bottom-up system of housing development not created by any law change by the government, though the state did offer motives for construction by granting tax breaks. ', 'articles/direct.jpg', '2023-10-09', '2023-10-06 14:30:45' );