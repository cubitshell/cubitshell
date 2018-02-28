		<!--
		function getslvalue()
		{
			var x = document.getElementById("pa").label;
			var a = document.getElementById("cancun").selected;
			var y = document.getElementById("yucatan").selected;
			var z = document.getElementById("oaxaca").selected;
			var w = document.getElementById("df").selected;
			switch(x){
				case 'México':
							if(a==true)
							{
								document.getElementById("ubi").src= "https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14883.100601636486!2d-86.84689157783092!3d21.16134467039479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssteren+cancun!5e0!3m2!1ses!2smx!4v1512065061192"
							}
							if(y == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3813233.572662337!2d-92.17435404201909!3d21.038250603283977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567721448299c5%3A0x1dc23e0973a1599!2sSteren+Shop+Plaza+Altabrisa!5e0!3m2!1ses!2smx!4v1510866137005"
							}
							if(z == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30508.961943441995!2d-96.76706182521352!3d17.09121849841885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sconstrusoft+oaxaca!5e0!3m2!1ses!2smx!4v1511231337643"
							}
							if (w== true) {
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481728.804584038!2d-99.42380635078402!3d19.390519038362424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce0026db097507%3A0x54061076265ee841!2sCiudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1511230679809"
							}
							break;
				 case 'USA':
				 			if(a==true)
							{
								document.getElementById("ubi").src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.7781982763054!2d-122.15278748504083!3d37.41871714033819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x655de7ca1791915f!2sStartX!5e0!3m2!1ses-419!2smx!4v1512079910042"
							}
							if(y == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206252.7214671204!2d-115.31508600576147!3d36.12519578266087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80beb782a4f57dd1%3A0x3accd5e6d5b379a3!2sLas+Vegas%2C+Nevada%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1512080751195"
							}
							if(z == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.432473608771!2d-71.12077508488939!3d42.37593274209228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37796a45ea167%3A0xb102ff91a70ffb28!2sMassachusetts+Ave%2C+Cambridge%2C+MA%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1512080287413"
							}
							if (w== true) {
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.1501993707916!2d-77.03871848499746!3d38.89768045453318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bcdecbb1df%3A0x715969d86d0b76bf!2sCasa+Blanca!5e0!3m2!1ses-419!2smx!4v1512080426669"
							}
							break;
					case 'FRA':
				 			if(a==true)
							{
								document.getElementById("ubi").src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTorre+Eiffel!5e0!3m2!1ses-419!2smx!4v1512081471811"
							}
							if(y == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d88915.47576449082!2d1.1618571551550585!3d45.85913179159387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72b5c11aee3ba437!2sSUN+UP+TECHNOLOGIES!5e0!3m2!1ses-419!2smx!4v1512081719100"
							}
							if(z == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1059.7688282664622!2d2.3657275138042952!3d48.86634709618796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e0873d4018b%3A0x10a28d99538dd2cd!2sTechnology+Everywhere!5e0!3m2!1ses-419!2smx!4v1512082062077"
							}
							if (w== true) {
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2668.8260808747677!2d0.1576040153040676!3d48.01706986752594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65d211f19c3e27a3!2sESPE+Academy+of+Nantes+-+Website+of+Le+Mans!5e0!3m2!1ses-419!2smx!4v1512082381035"
							}
							break;
					case 'FRA':
				 			if(a==true)
							{
								document.getElementById("ubi").src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80587.98300128599!2d4.301685188605527!3d50.86126684768069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c24512e1fcc1%3A0x23f6f29a020ede2f!2sInsight!5e0!3m2!1ses-419!2smx!4v1512082910449"
							}
							if(y == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2467.058450732686!2d10.22336071544569!3d51.80509259671455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a530990adfece3%3A0xc31acbb5790dead5!2sZirbus+technology+GmbH!5e0!3m2!1ses-419!2smx!4v1512082776997"
							}
							if(z == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d157382.0383963482!2d7.484012992980245!3d51.95047090365255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sM%C3%BCnster%2C+Alemania%2C+technology!5e0!3m2!1ses-419!2smx!4v1512082668219"
							}
							if (w== true) {
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155831.9552144447!2d9.65403552178568!3d52.39082898254649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb008ab3f1735a1ed!2sc.a.r.u.s.+Information+Technology+GmbH+Hannover!5e0!3m2!1ses-419!2smx!4v1512082609243"
							}
							break;
					case 'CHN':
				 			if(a==true)
							{
								document.getElementById("ubi").src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83501.76856944019!2d114.13868280699627!3d22.3426043532923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c718d956ed%3A0xf8c6a03a23f2b2d4!2sHongkong+Yejian+Technologies+Co.%2C+Ltd!5e0!3m2!1ses-419!2smx!4v1512083122969"
							}
							if(y == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.004384219434!2d114.16903231461657!3d22.315673947976663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400c6dd8484a7%3A0xa45307bd40b85ec8!2sHuawei+Technology+Co.%2C+Limited!5e0!3m2!1ses-419!2smx!4v1512083190300"
							}
							if(z == true)
							{
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.2159381902193!2d114.34285131496168!3d22.68300398512609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34046e22a424296b%3A0x1e65f0ab375e7065!2sShenzhen+Zhongwei+Technology+Co.%2CLtd.!5e0!3m2!1ses-419!2smx!4v1512083298396"
							}
							if (w== true) {
								document.getElementById("ubi").src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.004565260874!2d114.0937702146202!3d22.541501739792924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403f4352eda9c3f%3A0xf6fa2cc3c92838d3!2sShenzhen+Technology+Market+Promotion+Center!5e0!3m2!1ses-419!2smx!4v1512083396272"
							}
							break;
							}
		}
		//-->