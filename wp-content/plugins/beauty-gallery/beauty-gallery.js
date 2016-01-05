function changeFeatured(id)
	{
		var thumbLink = document.getElementById('thumb'+id+'-link');

		var nameSplited = 'thumb'+id;

		// Tratar identificador da thumb

		if(nameSplited.length > 1)
		{
			var thumbName =  nameSplited;

			var thumbImage = document.getElementById(thumbName);		
  		
	  		if(thumbImage != null)
	  		{
	  			var featuredImage = document.getElementById('featuredImage');

	  			
	  			if(featuredImage != null)
	  			{
	  				// Calculate the attribute
	  				var featuredImageName = thumbImage.src;

	  				// Change image src attribute
					featuredImage.src = featuredImageName;

					// Change title
					var galleryTitle = document.getElementById('gallery-title');
					galleryTitle.textContent = '';

					var inputHiddenTitle = document.getElementById('title-'+id);

					galleryTitle.textContent = inputHiddenTitle.value;

					// Change caption
					var galleryCaption = document.getElementById('gallery-caption');	
					galleryCaption.textContent = '';

					var inputHiddenCaption = document.getElementById('caption-'+id);

					galleryCaption.textContent = inputHiddenCaption.value;

					var currentClasses = thumbImage.getAttribute("class");

					currentClasses = currentClasses.split(" ");					

					if(currentClasses!= null)
					{
						setCurrentAttachmentId(id);	
						setCurrentIndex(currentClasses[0].split('-')[1]);
					}
					else
					{
						console.log('Current index not found');
					}

	  			}
	  			

	  		}

  		}
	}


/******************* NAVIGATION ******************************/

function moveNext()
{
	// get freaturedimage
	var featuredImage = document.getElementById('featuredImage');

	var currentElement = document.getElementById(currentElementId);

	currentElement.style.left -= 60;
}	

function findNextIndex()
{
	// Get the cuurrent attachment id input hidden element
	var currentIndex = getCurrentIndex();

	return parseInt(currentIndex)+1;

}

function setNext()
{
	var nextAttachmentIndex = findNextIndex();	

	var thumbs = getAttachmentList();
	
	var thumbId  = thumbs[nextAttachmentIndex].name.split('-');

	// find index on thumb
	var curentAttachmentId = thumbId[1];
	var currentIndex = getCurrentIndex();

	setCurrentIndex(parseInt(currentIndex) +1);
	setCurrentAttachmentId(curentAttachmentId);

}

function findPrevious()
{

}

function setCurrentIndex(index)
{
	var inputHiddenIndex = document.getElementById('currentIndex');
	inputHiddenIndex.value = index;
}

function getCurrentIndex()
{
	var inputHiddenIndex = document.getElementById('currentIndex');
	return inputHiddenIndex.value;
}

/*********ATTACHMENT ID CONTROLLER ************************************/

function setCurrentAttachmentId(id)
{
	var inputHiddenId = document.getElementById('currentAttachmentId');
	inputHiddenId.value = id;

	setFeaturedImageElement(id);
}

function getCurrentAttachmentId()
{
	var inputHiddenId = document.getElementById('currentAttachmentId');
	return inputHiddenId.value;
}


function setFeaturedImageElement(id)
{
	var featuredImage = document.getElementById('featuredImage');
	var thumbImage = document.getElementById('thumb'+id);		

	console.log(id);
	featuredImage.src = thumbImage.src;
}


function getAttachmentCount()
{
	var thumbList = getAttachmentList();

	return thumbList.length;
}

function getAttachmentList()
{
	var thumbList = document.getElementById('thumb-navigation');

	thumbList = thumbList.getElementsByClassName('thumb-item');

	return thumbList;
}

/************* ANIMATION *********************************/