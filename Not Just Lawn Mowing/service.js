document.addEventListener("DOMContentLoaded", () => {
   var  services = [
        {
            name: "Lawn Mowing",
            icon: "./Image/leaves.svg",
            img: "./Image/lawn-mowing.jpeg",
            caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
            description: "Enjoy our lawn mowing,<br> perfect for a tidy yard."
        },
        {
            name: "Landscaping",
            icon: "./Image/leaves.svg",
            img: "./Image/landscaping.jpeg",
            caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
            description: "Enjoy our landscaping,<br> perfect for outdoor aesthetics."
        },
        {
            name: "BBQ & Sheds",
            icon: "./Image/leaves.svg",
            img: "./Image/bbq-shed.jpeg",
            caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
            description: "Enjoy our BBQ sheds,<br> perfect for outdoor cooking."
        },
        {
            name: "Spa & Pools",
            icon: "./Image/leaves.svg",
            img: "./Image/pool-spa.jpeg",
            caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
            description: "Relax in our pools,<br> designed for ultimate comfort."
        },
        {
            name: "Planting",
            icon: "./Image/leaves.svg",
            img: "./Image/planting.jpeg",
            caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
            description: "Enjoy our planting,<br> perfect for vibrant gardens."
        }
    ];

    const serviceListDiv = document.querySelector(".service-list");

    // Clear existing content
    serviceListDiv.innerHTML = "";

    // Function to create and append service items
    const createServiceItem = (service) => {
        // Main container for service item
        const serviceItem = document.createElement("div");
        serviceItem.classList.add("service-item");

        // Sub-container
        const subDiv = document.createElement("div");
        subDiv.classList.add("sub");

        // Icon image
        const iconImg = document.createElement("img");
        iconImg.src = service.icon;
        iconImg.classList.add("service-img-icon");
        subDiv.appendChild(iconImg);

        // Main image
        const mainImg = document.createElement("img");
        mainImg.src = service.img;
        mainImg.classList.add("service-img");
        subDiv.appendChild(mainImg);

        // Caption div
        const captionDiv = document.createElement("div");
        captionDiv.classList.add("service-img-caption");
        captionDiv.innerHTML = `
            <img src="./Image/tick-filled.svg" class="service-img-caption-tick"/>
            ${service.caption}
                            <img src="./Image/tick.svg" class="service-img-caption-tick"/>
                            250k Pkr

        `;
        subDiv.appendChild(captionDiv);

        serviceItem.appendChild(subDiv);
        
                const description_div=document.createElement("div")
                description_div.style.marginBottom="40px";
                serviceItem.appendChild(description_div);
                

        // Title and description
        const title = document.createElement("h2");
        title.textContent = service.name;
        description_div.appendChild(title);
        

        const description = document.createElement("p");
        description.innerHTML = service.description;
        description_div.appendChild(description);
   
        // Append to the main list
        serviceListDiv.appendChild(serviceItem);
    };

    const createServiceTable = (services) => {
        const tableDiv = document.getElementById("table");
       
        const table = document.createElement("table");
    
        // Create table head
        const thead = document.createElement("thead");
        const headerRow = document.createElement("tr");
        const headers = ["Service Name", "Service Price", "Service Description"];
        headers.forEach(headerText => {
            const th = document.createElement("th");
            th.textContent = headerText;
            headerRow.appendChild(th);
        });
        thead.appendChild(headerRow);
        table.appendChild(thead);
    
        // Create table body
        const tbody = document.createElement("tbody");
        services.forEach(service => {
            const row = document.createElement("tr");
    
            const nameCell = document.createElement("td");
            nameCell.textContent = service.name;
            row.appendChild(nameCell);
    
            const priceCell = document.createElement("td");
            priceCell.textContent = service.price;
            row.appendChild(priceCell);
    
            const descriptionCell = document.createElement("td");
            descriptionCell.textContent = service.description;
            row.appendChild(descriptionCell);
    
            tbody.appendChild(row);
        });
        table.appendChild(tbody);
    
        tableDiv.appendChild(table);
    };


    const key = "1234"; // Predefined key for authentication

    // Elements
    const addItemBtn = document.getElementById("addItemBtn");
    const removeItemBtn = document.getElementById("removeItemBtn");
    const popup = document.getElementById("popup");
    const keyInput = document.getElementById("keyInput");
    const submitKey = document.getElementById("submitKey");
    const serviceForm = document.getElementById("serviceForm");
    const addServiceBtn = document.getElementById("addServiceBtn");
    const serviceList = document.getElementById("service-list");
    const closePopup = document.getElementById("closePopup");
    const authpopup = document.getElementById("auth-popup");
    
    
    // Open the popup for authentication
    function openPopup() {
        popup.style.display = "flex";
    }
    
    // Close the popup
    closePopup.addEventListener("click", () => {
        popup.style.display = "none";
    });
    
    // Handle key submission for authentication
    submitKey.addEventListener("click", () => {
        const enteredKey = keyInput.value;
        if (enteredKey === key) {
            // alert("Key correct!");
            keyInput.value = ""; // Reset the input field
            serviceForm.style.display = "block"; // Show the form for adding a new service
            authpopup.style.display= "none"
        } else {
            alert("Incorrect key. Please try again.");
        }
    });
    
    // Add service to the list
    addServiceBtn.addEventListener("click", () => {
        const serviceName = document.getElementById("serviceName").value;
        const servicePrice = document.getElementById("servicePrice").value;
        const serviceDescription = document.getElementById("serviceDescription").value;
    
        if (serviceName && servicePrice && serviceDescription) {
            // Create a new object using the variables
        let newService = {
        name: serviceName,
        icon: "./Image/leaves.svg",
        img: "./Image/landscaping.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: serviceDescription,
        };


        // Add the new service to the array
        services.push(newService);


            // const newServiceItem = document.createElement("div");
            // newServiceItem.classList.add("service-item");
    
            // newServiceItem.innerHTML = `
            //     <h3>${serviceName}</h3>
            //     <p>Price: ${servicePrice}</p>
            //     <p>Description: ${serviceDescription}</p>
            // `;
    
            // Append the new service item to the service list
            // serviceList.appendChild(newServiceItem);
    
            // Reset the form
            document.getElementById("serviceName").value = "";
            document.getElementById("servicePrice").value = "";
            document.getElementById("serviceDescription").value = "";
            serviceListDiv.innerHTML = "";
            table.innerHTML="";
            services.forEach(createServiceItem);
    createServiceTable(services);
    popup.style.display="none"
        } else {
            alert("Please fill in all fields.");
        }
    });
    
    // Remove last service item from the list
    removeItemBtn.addEventListener("click", () => {
        const enteredKey = prompt("Enter key to remove the last item:");
    
        if (enteredKey === key) {
            const tableDiv = document.getElementById("table"); // Locate the table container
    const table = tableDiv.querySelector("table");    // Find the table inside the container
        const tbody = table.querySelector("tbody");   // Find the table body
    
            // Ensure there's an item to remove
            if (tbody.lastElementChild && serviceListDiv.lastElementChild) {
                
                 // Remove last child from tbody and serviceListDiv
                tbody.removeChild(tbody.lastElementChild); 
                services.pop(); // Remove last service from the array
                serviceListDiv.removeChild(serviceListDiv.lastElementChild);
              } else {
                alert("No items to remove.");
            }
        } else {
            alert("Incorrect key. Cannot remove item.");
        }
    });
    
    // Open the popup when "Add Item" button is clicked
    addItemBtn.addEventListener("click", openPopup);
    

    // Dynamically add services
    services.forEach(createServiceItem);
    createServiceTable(services);
});
 
    // <div class="service-item">
    //     <div class="sub">
    //         <img src="./Image/leaves.svg" class="service-img-icon"/>
    //         <img src="./Image/lawn-mowing.jpeg" class="service-img">
    //         <div class="service-img-caption">
    //             <img src="./Image/tick-filled.svg" class="service-img-caption-tick"/>
    //             250+ Client<div class="inline-dashed-vertical-line"></div>
    //             <img src="./Image/tick.svg" class="service-img-caption-tick"/>
    //             25k USD
    //         </div>
    //     </div>
       
//     <div style="margin-bottom:40px;">
//     <h2>Lawn Mowing</h2>
//     <p>
//         Enjoy our lawn mowing,<br>
//         perfect for a tidy yard.
//     </p>
// </div>


