<h1>FOSS Theme documentation</h1>
This is the documentation for the FOSS theme to be implemented in Drupal 7.<br />

<h2>Home Page</h2>
The home page is consisted of four views, which had been set to show only preview content from nodes of corresponding content types.

<h3>Views and their corresponding content type in paranthesis.</h3>
<strong>Featured Slider (Featured Slider)</strong>- This view is located in the header section
and will cycle through latest images uploaded. <br /><br /> To upload/edit contents and images for Featured 
Slider
<ol>
<li>navigate to the admin navbar and go to "content/Create content/Featured Slider" to create. Navigate to "Content" tab and find the node that was created under the content type of "Featured Slider"</li>
<li>Add a title, the title will be excluded from the display  *make it meaningful</li>
<li>Upload image under slider image section. *note all images should be 800 X 400 px. Images will automatically rescale upon device width.</li>
<li>To add a title and teaser body text, just go to drop down choose full-html and don't forget to disable rich text. From there add h1 tags for title and p tags for body text.</li>
<li>slider links can be left blank, unless user wants to specify the node to be linked.</li>
</ol>
<strong>Featured Events (Events)</strong>- This view is located in the content section and is the first of the two sliders. The view basically cycles through all of the lastest nodes in "Events" content type.<br /><br /> To upload/edit new content to be featured on the slider, one would just simply create/edit the node under the content type of  <a href="#Event">event</a>
