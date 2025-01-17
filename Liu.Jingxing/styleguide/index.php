<?php 
include_once "../lib/php/functions.php";
?>
<!DOCTYPE html>
<html>
<head>

  
  <title>CSS Styleguide</title>
	<?php include "../parts/meta.php"; ?>

</head>
<body>
	<?php include "../parts/navbar.php"; ?>
  

  <div class="container" id="tableOfContents">
  	<h2>Table of Content</h2>
  	<div class="card">
  		<nav class="nav">
  			<ul>
				<li><a href="#typography">Typegraphy</a></li>
				<ul>
					<li><a href="#headings">Headings</a></li>
					<li><a href="#paragraphs">paragraphs</a></li>
				</ul>
				<li><a href="#colors">Colors</a></li>
				<li><a href="#cards">Cards</a></li>
				<li><a href="#viewwindow">View Windows</a></li>
				<li><a href="#navigations">Navigations</a></li>
				<li><a href="#gridsystem">Grid System</a></li>
				<li><a href="#flexsystem">Flex System</a></li>
				<li><a href="#figures">Figures</a></li>
				<li><a href="#input">Input</a></li>
				<li><a href="#button">Buttons</a></li>
				<li><a href="#hotdog">Hotdog</a></li>
				<li><a href="#select">Select</a></li>
				<li><a href="#checkbox">Check Boxes</a></li>

			</ul>
  		</nav>
  		
  	</div>
  </div>

  <div class="container" id="typography">
  	<h2>Typegraphy</h2>
  	<div class="card soft" id="headings">
  		<h3>Headings</h3>
		<h1>Heading 1: Myriad Pro Bold 24px</h1>
		<h2>Heading 2: Myriad Pro Bold 18px</h2>
		<div class="bodyText1">Body text: Myriad Pro Bold 14px</div>
		<div class="bodyText2">Body text: Myriad Pro Bold 12px</div>
		<div class="buttonText">Body text: Myriad Pro Bold 10px</div>
	</div>
	<div class="card soft" id="paragraphs">
		<h3>Paragraphs</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et hendrerit ante. Vestibulum quis magna consequat, cursus urna nec, porttitor ex. Integer placerat nunc in ornare vestibulum. Nullam ultricies ullamcorper.</p>
		<p>Quisque quis commodo urna, a facilisis elit. Sed malesuada tincidunt eros non pellentesque. Ut ultrices sem at justo sodales, nec hendrerit arcu fermentum. Duis porta ac justo a ultrices. Aliquam.</p>
		<p>In dictum magna ut velit accumsan, ac iaculis ex finibus. Ut fermentum congue nisi, ut vulputate sem tempor ut. In condimentum ornare magna vitae faucibus. Vestibulum ante ipsum primis in.</p>

  	</div>
  </div>

  <div class="container" id="colors">
	<h2>Colors</h2>

	<div class="grid gap">
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors primary-grey"></div>
			<figcaption>Primary Grey</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors primary-white"></div>
			<figcaption>Primary White</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors secondary-black"></div>
			<figcaption>Secondary Black</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors secondary-yellow"></div>
			<figcaption>Secondary Yellow</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors secondary-grey"></div>
			<figcaption>Secondary Grey</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors neutral"></div>
			<figcaption>Neutral</figcaption>
		</figure>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<figure class="figure">
			<div class="colors highlight"></div>
			<figcaption>Highlight</figcaption>
		</figure>
	  </div>
	  
  </div>

  <div class="container" id="cards">
	<h2>Cards</h2>

	<div class="grid gap">
	  <div class="col-xs-12 col-md-4">
		<div class="card">Card</div>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<div class="card soft">Card Soft</div>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<div class="card hard">Card Hard</div>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<div class="card flat">Card Flat</div>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<div class="card dark">Card Dark</div>
	  </div>
	  <div class="col-xs-12 col-md-4">
		<div class="card medium">Card Medium</div>
	  </div>
	</div>
  </div>

  <div class="container" id="viewwindow">
	<h2>View Window</h2>
  </div>


  <div class="container" id="navigations">
	<h2>Navigations</h2>

	<script>
		const makeNav = (classes='') => {
			const links = ['home','store','about'];
			let ran = Math.floor(Math.random()*links.length);
			document.write(`
				<div>
					<nav class="${classes}">
				<ul>
					${links.reduce((r,o,i)=>{
						return r+`<li class="${ran==i?'active':''}"><a href="#">${o}</a></li>`;
					},'')}
				</ul>
			</nav>
		</div>
		`);
		}
	</script>

	<div class="card soft">
		<h3>Basic Nav</h3>

		<script>makeNav('nav')</script>
	</div>


	<div class="card soft">
		<h3>Flex Nav</h3>

		<script>makeNav('nav nav-flex')</script>
	</div>


	<div class="card soft">
		<h3>Stretch Nav</h3>

		<script>makeNav('nav nav-stretch')</script>
	</div>

		<div class="card soft">
		<h3>Pills Nav</h3>

		<script>makeNav('nav nav-pills')</script>
	</div>

	<div class="card soft">
		<h3>Crumbs Nav</h3>

		<script>makeNav('nav nav-crumbs')</script>
	</div>

	<div class="card soft">
		<h3>Material Nav</h3>

		<script>makeNav('nav nav-material')</script>
	</div>

	<script>
		$("#navigations a").on("click",function(e){
			e.preventDefault();
			$(this).closest("li").addClass("active")
			.siblings().removeClass("active")
		})
	</script>
  </div>

<div class="container" id="gridsystem">
	<h2>Grid System</h2>
</div>

<div class="container" id="flexsystem">
	<h2>Flex system</h2>
</div>

<script>
	const makeTable = (classes='') => {
		const head = ['ID','Office','Name','Email', 'Phone'];
		const body = [
		['101',"Michael Wise", 'jillianjones@hoover.biz','376-024-3600'],
		['102',"Amy Smith", 'angelaleblanc@hotmail.com','057-964-7306'],
		['103',"Bill Anderson", 'anthonydiaz@gmail.com','262-616-6203'],
		['104',"Richard Jenkins", 'garzakevin@peterson.com','724-056-5116'],
		];

		//let ran = Math.floor(Math.random()*links.length);
		document.write(`
		<table class="${classes}">
		<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
		<tbody>${body.reduce((r,o,i)=>r+
			`<tr>${
				[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
			}</tr>`,'')
	}</tbody>
	</table>
	`);
	}
</script>


<div class="container">
	<h2>Tables</h2>

	<div class="card soft">
		<h3>Basic Table</h3>

		<script>makeTable("table")</script>
	</div>	

<div class="card soft">
	<h3>Striped Tables</h3>

	<script>makeTable("table striped")</script>
</div>

<div class="card soft">
	<h3>Striped Line Vertical</h3>

	<script>makeTable("table lined vertical")</script>
</div>

<div class="card soft">
	<h3>Striped Line Horizontal</h3>

	<script>makeTable("table lined horizontal")</script>
</div>


<div class="card soft">
	<h3>Striped Line Border</h3>

	<script>makeTable("table lined border")</script>
</div>

<div class="card soft">
	<h3>Striped Lined All</h3>

	<script>makeTable("table lined all")</script>
</div>

<div class="card soft">
	<h3>Combinations</h3>

	<script>makeTable("table lined vertical border striped")</script>
</div>




<h2 id="figures">Figures</h2>

	<div class="card">
		<h3>Basic Figure</h3>

		<figure class="figure">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>Product</figcaption>
		</figure>

	</div>

		<h3>Figure Grid</h3>

	<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			<figure class="figure">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>Product</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>Product</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>Product</figcaption>
		</figure>
		</div>
	</div>

	<h3>Product Grid</h3>

		<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			<figure class="figure product">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div>Product Name</div>
				<div>$19.99</div>
			</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure product">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div>Product Name</div>
				<div>$19.99</div>
			</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure product">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div>Product Name</div>
				<div>$19.99</div>
			</figcaption>
		</figure>
		</div>
	</div>

	<h3>Product Overlay</h3>

		<div class="grid gap">
		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>$19.99</div>
				</div>
			</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>$19.99</div>
				</div>
			</figcaption>
		</figure>
		</div>
		<div class="col-xs-12 col-md-4">
			<figure class="figure product-overlay">
			<img src="http://via.placeholder.com/400x400?text=product" alt="">
			<figcaption>
				<div class="caption-body">
					<div>Product Name</div>
					<div>$19.99</div>
				</div>
			</figcaption>
		</figure>
		</div>
	</div>
	<div>
		<h2 id="input">Input</h2>
		<div class="card">
		<form action="">
			<div class="form-control">
				<label for="" class="form-label">Example</label>
				<input type="text" placeholder="Text" class="form-input">
			</div>
			<div class="form-control">
				<label for="" class="form-label">Example</label>
				<input type="number" placeholder="Number" class="form-input">
			</div>
			<div class="form-control">
				<label for="" class="form-label">Example</label>
				<input type="password" placeholder="Password" class="form-input">
			</div>
			<div class="form-control display-flex flex-align-center">
				<div class="flex-none"><label for="" class="form-label">Example</label></div>
				<div class="flex-stretch"><input type="" placeholder="Search" class="form-input"></div>
				<div class="flex-none"><label for="" class="form-label">Example</label></div>
				<div class="flex-stretch"><input type="" placeholder="Search" class="form-input"></div>
			</div>
		</form>

		<h3 id="button">Button</h3>
		<div class="card soft">
			<h3>Default Buttons</h3>
			<button>Default Button</button>

			<h3>Form Button</h3>
			<div class="form-control">
				<button type="button" class="form-button">Button</button>
			</div>
			<div class="form-control">
				<input type="button" class="form-button" value="Input">
			</div>
			<div class="form-control">
				<a href="#" class="form-button">Anchor</a>
			</div>
		</div>

		<h2 id="hotdog">Hotdog</h2>
		<div class="card soft">
			<div class="form-control">
				<form>
					<input type="search" class="hotdog" placeholder="Search">
				</form>
			</div>

			<div class="form-control">
				<form>
					<input type="search" class="hotdog dark" placeholder="Search">
				</form>
			</div>

			<div class="form-control">
				<form class="card dark">
					<input type="search" class="hotdog light" placeholder="Search">
				</form>
			</div>

			<div class="form-control">
				<form class="hotdog">
					<span>&equiv;</span>
					<input type="search" placeholder="Search">
				</form>
			</div>
		</div>

		<h2 id="select">Select</h2>
		<div class="card soft">
			<div class="form-select">
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>

			<div class="display-flex">
				<div class="flex-stretch"></div>
				<div class="flex-none form-control">
					<div class="form-select">
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<h2 id="checkbox">Check Boxes</h2>
			<div class="card soft">
				<h3>Basic Checkbox</h3>
				<label>Label <input type="checkbox" id="input-1"></label>
				<label for="input-1">Label</label>

				<h3>Heart Checkbox</h3>
				<div class="favorite">
					<input type="checkbox" id="heart-example" class="hidden">
					<label for="heart-example">&hearts;</label>
				</div>

				<h3>Toggle</h3>
				<div class="toggle">
					<input type="checkbox" id="toggle-1" class="hidden">
					<label for="toggle-1"></label>
				</div>
				<div class="display-flex flex-align-center">
					<div class="flex-stretch">
						<label for="toggle-2" class="form-label">Display Warning?</label>
					</div>
					<div class="flex-none">
						<div class="toggle" style="font-size: 2em;">
					<input type="checkbox" id="toggle-2" class="hidden">
					<label for="toggle-2"></label>
				</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>	
</div>


</div>
</body>
</html>