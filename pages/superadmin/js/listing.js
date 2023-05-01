


function deletetax(x){
    alert(x)
}
    

function main(type){
    const form = new FormData();
    form.append("action", "listings_display");
    form.append("type", type);

    const settings = {
    "async": true,
    "crossDomain": true,
    "url": "API/manager.php",
    "method": "POST",
    "headers": {},
    "processData": false,
    "contentType": false,
    "mimeType": "multipart/form-data",
    "data": form
    };

    
    $.ajax(settings).done(function (response) {
        $("#listing_div").html("");
        response=JSON.parse(response)
        const data = response.data;
        const listingDiv = $("#listing_div");
        if(!response.status){return}
    
        for (let i = 0; i < data.length; i++) {
        const user = data[i];
        const listingBlockSeven = $("<div>", {"class": "listing-block-seven"});
        const innerBox = $("<div>", {"class": "inner-box"});
        const imageBox = $("<div>", {"class": "image-box"});
        const image = $("<img>", {"src": user.profile_image, "alt": ""});
        const figure = $("<figure>", {"class": "image"}).append(image);
        imageBox.append(figure);
    
        const contentBox = $("<div>", {"class": "content-box"});
        const rating = $("<div>", {"class": "rating"});
        for (let j = 0; j < 5; j++) {
            const star = $("<span>", {"class": "fa fa-star"});
            rating.append(star);
        }
        const title = $("<span>", {"class": "title", "text": user.review_count});
        rating.append(title);
    
        const h3 = $("<h3>").append($("<a>", {"href": "#", "text": user.name}).append($("<span>", {"class": "icon icon-verified"})));
        const text = $("<div>", {"class": "text", "text": user.overview});
    
        const ul = $("<ul>", {"class": "info"});
        const li1 = $("<li>").append($("<div>", {"class": "place"}).append($("<span>", {"class": "icon flaticon-bed"}), "Hotels"));
        const li2 = $("<li>", {"text": user.city + ", " + user.state}).prepend($("<span>", {"class": "flaticon-pin"}));
        const li3 = $("<li>", {"text": user.phone}).prepend($("<span>", {"class": "flaticon-phone-call"}));
        ul.append(li1, li2, li3);
    
        const btnBox = $("<div>", {"class": "btn-box"});
        const editBtn = $("<button>", {"class": "theme-btn btn-style-one small bg-gray", "text": "Edit"}).append($("<span>", {"class": "icon flaticon-edit"}));
        const deleteBtn = $("<button>", {"class": "theme-btn btn-style-one small bg-purple", "text": "Delete"}).append($("<span>", {"class": "icon flaticon-delete-button"}));
        btnBox.append(editBtn, deleteBtn);

        deleteBtn.click(function() {
            deletetax(user.id);    
        });
        
    
        contentBox.append(rating, h3, text, ul);
        innerBox.append(imageBox, contentBox, btnBox);
        listingBlockSeven.append(innerBox);
        listingDiv.append(listingBlockSeven);
        }
    });
}

main("0")


// async function deletetax(id) {
//     function loaddata(){
//     newform = new FormData();
//       newform.append("obj", "tax_delete");
//       newform.append("id", id);
//       return fetch("API/car.php", {
//         method: "POST",
//         body: newform,   
//         mode: "cors",
//         credentials: "include"
//       }).then(response => response.json());
//     }
  
//     let data = await loaddata();
  
//     if(data.message){
//       main();
//     }else{
//       alert("Something Went Wrong! \n Please Try Again Later");
//     }
//   }


