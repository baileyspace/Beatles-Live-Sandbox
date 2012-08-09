jQuery(document).ready(function () {
		
    // relabel Dublin Core as PBCore
    jQuery("a:contains('Dublin Core'),legend:contains('Dublin Core')").text('PBCore');

    //add Text notes
    jQuery('span#dublin-core-description').text('PBCore is the metadata standard for audiovisual media developed by the public broadcasting community.');

	//change description for Creator
	jQuery("#element-39>p.explanation").text('Identifies a person or organization primarily responsible for creating a media item. The creator may be considered an author and could be one or more people, a business, organization, group, project or service. (For personal names use "LastName, FirstName MiddleName, Suffix").');

	// relabel Date as Date Created
	jQuery("#element-40>label").text('Date Created');
	//change description for Date Created
	jQuery("#element-40>p.explanation").text('The original date that the media item was created. In the case of raw interviews, the date on which the interview was conducted.');	

	//change description for Description
	jQuery("#element-41>p.explanation").text('Uses free-form text or a narrative to report abstracts, or summaries about the intellectual content of a media item you are cataloging. The information may be in the form of a paragraph giving an individual program description, anecdotal interpretations, or brief content reviews.');
	
	
	//relabel Format as Digital Format
	jQuery("#element-42>label").text('Digital Format');
	//change description for Digital Format
	jQuery("#element-42>p.explanation").text('The format of a particular version or rendition of a media item as it exists in its digital form, i.e., as a digital file on a server or hard drive. This is the format of the file you originally upload to Omeka.');
	
	//change description for Identifier
	jQuery("#element-43>p.explanation").text('The URI for the Internet Archive landing page for the item you are cataloging.');
	
	//change description for Rights
	jQuery("#element-47>p.explanation").text('Information about copyrights and property rights held in and over a media item, whether they are open access or restricted in some way. If dates, times and availability periods are associated with a right, include them. End user permissions, constraints and obligations may also be identified, as needed.');
	
	//relable Title as Item Title
	jQuery("#element-50>label").text('Item Title');
	//change description for  Item Title
	jQuery("#element-50>p.explanation").text('The name given to the media item you are cataloging. It is the unique name everyone should use to refer to or search for a particular media item. Note: Titles are typically "proper" or "given" titles supplied by the original creator of a media item. However, there are situations in which no proper or given title is available, e.g., photographs or segments harvested from a longer work or program. In these situations a "supplied title" must be invented and used to name the media item. In creating a "supplied title," be considerate of and sensitive to the end user who is attempting to search for your media item. After all, you want others to successfully discover and retrieve information about your media item.');
           
});