// Get JSON post data
function loadJSON(callback) {
	var xobj = new XMLHttpRequest();
	xobj.overrideMimeType("application/json");
	xobj.open("GET", "/sitemap.json", true);
	xobj.onreadystatechange = function () {
		if (xobj.readyState == 4 && xobj.status == "200") {
			callback(xobj.responseText);
		}
	};
	xobj.send(null);
}

function search(query) {
	loadJSON(function (response) {
		let feed = JSON.parse(response);
		const options = {
			includeScore: true,
			keys: ["title", "description"],
		};
		const fuse = new Fuse(feed, options);
		const result = fuse.search(query);

		const postListContainer = document.querySelector("#posts-list");

		const loader = document.createElement("span");
		loader.classList.add("loader");
		postListContainer.appendChild(loader);

		setTimeout(() => {
			postListContainer.querySelector(".loader").remove();
					
			if (result.length <= 0) {
				const postItemContainer = document.createElement("li");
				const titleContainer = document.createElement("h3");
				titleContainer.style.textAlign = "center";
				titleContainer.innerHTML = "No results found";
				
				postItemContainer.appendChild(titleContainer);
				
			} else {
				for (var i = 0, p = result.length; i < p; i++) {
					var obj = result[i];

					const postItemContainer = document.createElement("li");

					// Create title
					const titleContainer = document.createElement("h2");
					const linkContainer = document.createElement("a");
					const titleData = obj.item.title;
					const urlData = obj.item.url;
					linkContainer.innerHTML = titleData;
					linkContainer.setAttribute("href", "/blog/" + urlData);
					titleContainer.appendChild(linkContainer);

					// Create date
					const dateContainer = document.createElement("time");
					const dateData = obj.item.date;
					dateContainer.setAttribute("datetime", dateData);
					dateContainer.classList.add("post-date");
					dateContainer.innerHTML = dateData;

					// Create tags
					const tagsContainer = document.createElement("span");
					const tagsData = obj.item.tags;
					tagsContainer.classList.add("categories");
					tagsContainer.innerHTML = tagsData;

					const seperator = document.createElement("hr");

					// Assemble post list item
					postItemContainer.appendChild(titleContainer);
					postItemContainer.appendChild(dateContainer);
					postItemContainer.appendChild(tagsContainer);
					postItemContainer.appendChild(seperator);

					postListContainer.appendChild(postItemContainer);

				}
			}
		}, 1000);
	});
}

const searchInput = document.getElementById("search");
const posts = search(searchInput.value);
