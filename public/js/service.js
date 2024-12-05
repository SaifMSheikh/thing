export var  services = [
    
    {
        name: "Lawn Mowing",
        icon: "./Image/leaves.svg",
        img: "./Image/lawn-mowing.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our lawn mowing.",
         value: "lawnmowing",
         price: "250 Pkr"
    },
    {
        name: "Landscaping",
        icon: "./Image/leaves.svg",
        img: "./Image/landscaping.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our landscaping.",
        value: "landscaping",
         price: "250 Pkr"
    },
    {
        name: "BBQ & Sheds",
        icon: "./Image/leaves.svg",
        img: "./Image/bbq-shed.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our BBQ sheds.",
        value: "bbq-sheds",
         price: "250 Pkr"
    },
    {
        name: "Spa & Pools",
        icon: "./Image/leaves.svg",
        img: "./Image/pool-spa.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Relax in our pools.", 
        value: "spa-pools",
         price: "250 Pkr"
    },
    {
        name: "Planting",
        icon: "./Image/leaves.svg",
        img: "./Image/planting.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: "Enjoy our planting.",
        value: "planting",
         price: "250 Pkr"
    }
];

document.addEventListener("DOMContentLoaded", () => {
   
    const serviceListDiv = document.querySelector(".service-list");

    // Clear existing content

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
           ${service.price}
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
    const serviceForm = document.getElementById("serviceForm");
    const addServiceBtn = document.getElementById("addServiceBtn");
    const serviceList = document.getElementById("service-list");
    const closePopup = document.getElementById("closePopup");
    
    
    // Open the popup for authentication
    function openPopup() {
        popup.style.display = "flex";
        serviceForm.style.display = "flex";
        serviceForm.style.flexDirection="column";
        serviceForm.style.justifyContent="center";
        serviceForm.style.alignItems="center";
        
    }
    
    // Close the popup
    closePopup.addEventListener("click", () => {
        serviceForm.style.display = "none";
        popup.style.display = "none";

    });
    
    
    // Add service to the list
    addServiceBtn.addEventListener("click", () => {
        
        const serviceName = document.getElementById("serviceName").value;
        const servicePrice = document.getElementById("servicePrice").value;
        const serviceDescription = document.getElementById("serviceDescription").value;
    
        if (serviceName && servicePrice && serviceDescription) {
            // Create a new object using the variables
        let newService = {
            price:servicePrice,
        name: serviceName,
        icon: "./Image/leaves.svg",
        img: "./Image/landscaping.jpeg",
        caption: "250+ Client<div class='inline-dashed-vertical-line'></div>",
        description: serviceDescription,
        };


        // Add the new service to the array
        services.push(newService);

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
    addItemBtn.addEventListener("click", ()=>{
        const enteredKey = prompt("Enter key to add an item:");
    
        if (enteredKey === key) {
            openPopup();
        }
    });
    
    // Dynamically add services
    services.forEach(createServiceItem);
    createServiceTable(services);
});