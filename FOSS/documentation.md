<h1>FOSS Theme documentation</h1>
This is the documentation for the FOSS theme to be implemented in Drupal 7.<br />
<h2>Home Page</h2>
The home page is consisted of four views, which had been set to show only preview content from nodes of corresponding content types.<br /><br />
<strong>Featured Slider (Featured Slider)</strong>- This view is located in the header section
and will cycle through latest images uploaded. <br /><br /> To upload/edit contents and images for Featured 
Slider
<ol>
<li>navigate to the admin navbar and go to "content/Create content/Featured Slider" to create. Navigate to "Content" tab and find the node that was created under the content type of "Featured Slider" to edit the origonal content or swap out image.</li>
<li>Add a title, the title will be excluded from the display  *make it meaningful</li>
<li>Upload image under slider image section. *note all images should be 800 X 400 px. Images will automatically rescale upon device width.</li>
<li>To add a title and teaser body text, just go to drop down choose full-html and don't forget to disable rich text. From there add h1 tags for title and p tags for body text.</li>
<li>slider links can be left blank, unless user wants to specify the node to be linked.</li>
</ol>
<strong>Featured Events (Events)</strong>- This view is located in the content section and is the first of the two sliders. The view basically cycles through all of the lastest nodes in "Events" content type.<br /><br /> To upload/edit new content to be featured on the slider, one would just simply create/edit the node under the content type of  <a href="#events">event</a><br /><br />
<strong>Featured Projects (project)</strong>- This view is located in the content section and is the second of the two sliders. The view basically cycles through all of the lastest nodes in "project" content type.<br /><br /> To upload/edit new content to be featured on the slider, one would just simply create/edit the node under the content type of  <a href="#projects">project</a><br /><br />
<strong>Recent-Blogs (Blog entry)</strong>- This view is located in the right-side panel(region-sidebar-second). This view generates a list of teasers consisted of shortened field values from the oroginal node.<br /><br /> To upload/edit new content to be featured on the list, one would just simply create/edit the node under the content type of  <a href="#blogs">Blog entry</a><br /><br />
<h2>Events Page</h2>
The Events page is consisted of two views, Events and <a href="#blogs">Recent Blog</a> posts.<br /><br />
<strong>Events(Event)</strong>- This view generates the grid layout of teasers of the latest nodes under the content type of "Event"<br /><br /> <div id="events">To upload/edit new content</div>
<ol><li>In the admin navigation go to "Content/Create Content/Event" to create new event node.  To modify event node, go to "Content" tab and locate node title.</li>
<li>Give your node a meaningful title</li>
<li>add text the body(can be in any format in the drop down)</li>
<li>Select group of event form the drop down menu</li>
<li>Select the event type form drop down</li>
<li>Include an image, if desired from upload button</li>
</ol>
<p>*note all changes made to any node in events content type will show on the "Featured-Events" slider and "Events" grid.</p>
