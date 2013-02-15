<h1>FOSS Theme documentation</h1>
This is the documentation for the FOSS theme to be implemented in Drupal 7.<br />
<h2>Home Page</h2>
The home page is consisted of four views, which had been set to show only preview content from nodes of the corresponding content types.<br /><br />
<strong>Featured Slider (Featured Slider)</strong>- This view is located in the header section
and will cycle through latest images uploaded. <br /><br /> To upload/edit contents and images for Featured 
Slider
<ol>
<li>First navigate to the admin navbar and go to "content/Create content/Featured Slider" to create. Navigate to "Content" tab and find the node that was created under the content type of "Featured Slider" to edit the original content or swap out image.</li>
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
<p>To modify the basic info about the events page, simply click on the edit tab located in the content area and you should have access to every piece of content below the grid to modify if you are a registered admin.</p>
<strong>Events(Event)</strong>- This view generates the grid layout of teasers of the latest nodes under the content type of "Event"<br /><br /> <a name="events">To upload/edit new content</a>
<ol><li>In the admin navigation go to "Content/Create Content/Event" to create a new event node.  To modify an event node, go to the "Content" tab in the admin nav bar and locate node title. *It may help if you set the filter to only search for the content type of "Event"</li>
<li>Give your node a meaningful title</li>
<li>Add text to the body(can be in any format in the drop down)</li>
<li>Select group of event from the drop down menu</li>
<li>Select the event type from the drop down menu</li>
<li>Include an image, if desired from upload button</li>
</ol>
<p>*note all changes made to any node in events content type will show on the "Featured-Events" slider and "Events" grid.</p><br />

<h2>Projects Page</h2>
The Projects page is consisted of two views, Projects and <a href="#blogs">Recent Blog</a> posts.<br /><br />
<strong>Projects(Project)</strong>- This view generates the grid layout of teasers of the latest nodes under the content type of "Project"<br /><br /> <a name="projects">To upload/edit new content</a>
<ol><li>In the admin navigation go to "Content/Create Content/Project" to create new project node.  To modify a project node, go to "Content" tab and locate the node title under the content type of Project. *It may help if you set the filter to only search for projects</li>
<li>Give your node a meaningful title</li>
<li>Add text the body(can be in any format in the drop down)</li>
<li>Select the project type from drop down</li>
<li>Include an image, if desired from upload button</li>
</ol>
<p>*note all changes made to any node in projects content type will show on the "Featured-Projects" slider and "Projects" grid.</p><br />
<h2>News Page</h2>
The News Feed page contains an aggregation of news feed and a view for <a href="#blogs">Recent Blog</a> posts.<br /><br />
To upload/edit new content in the aggregator<br />
<ol><li>In the admin navigation go to "Configuration/Web services/ Feed aggregator"to modify content. To create an item inside the aggregator go to "Configuration/Web services/ Feed aggregator/Add feed". </li>
</ol><br />
<h2>Research Page</h2>
<p>The Research page contains only one item, a static node labeled as "research" under the content type of "Page".</p><br /><br />
<h2>Navigation</h2>
<p>Navigation is not a view. Main navigation shown in the header on every page is located at "Structure/Menus/Main Menu" inside the admin nav bar.</p>
<p>To edit/add items to the main navigation:</p>
<ol>
<li>Hover over tab "Structure" in the admin nav bar, hover over "Menus" then click on "Main Menu"</li>
<li>From there you can either add a link to the menu or re-arrange the menu by weight.</li>
<li>To add links.<ul>
<li>Click add link button</li>
<li>Choose a meaningful title</li>
<li>Choose a path for an existing node/page or external url</li>
<li>Give a description of what this link is about.</li>
<li>Check enabled to show this link in main navigation</li>
<li>If this link does not have any children uncheck "Show as expanded"</li>
<li>Click save</li>
</ul></li>
<li>To re-arrange the order of links just simply define the weight, highest number starting from the left and lowest number ending on the right</li>
</ol><br/ ><br />
<h2>Blog Posts</h2>
<p><a name="blogs">Blog posts</a> can reached by clicking the more link, located on the bottom of the recent blogs panel.</p>
<p>To add/edit blogs</p>
<ol>
<li>Navigate to "Content/Create Content/Blog Entry" for creating a blog post. To modify a blog post, simply click on the "Content" tab and look for the title of the blog post under the content type of "Blog Entry" </li>
<li>Choose a meaningful title for the blog post</li>
<li>Edit the body content in any way you'd like from the provided options in drop-down menu</li>
<li>Attach a file, must be within the guidlines of the  allowed file type</li>
<li>Upload a teaser image for the blog post, this will be used for the side panel of blog teasers</li>
</ol>
