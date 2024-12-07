var services = []; // Array to store the services
var checkboxStates = []; // Array to store checkbox states

// Fetch services and update the service list
const fetchServices = () => {
    fetch("/services")
        .then((response) => response.json())
        .then((data) => {
            services = data;
            createDropdownOptions(services); // Create dropdown options once services are fetched
        })
        .catch((error) => console.error("Error fetching services:", error));
};

// Create dropdown options dynamically with checkboxes
function createDropdownOptions(serviceList) {
    const dropdownMenu = document.getElementById("dropdown-menu");

    // Clear existing content to prevent duplicates
    dropdownMenu.innerHTML = "";

    // Dynamically create labels and checkboxes
    serviceList.forEach((service) => {
        const label = document.createElement("label");
        const checkbox = document.createElement("input");

        // Check if the service has a saved checkbox state
        const serviceState = checkboxStates.find(
            (state) => state.serviceName === service.name
        );

        checkbox.type = "checkbox";
        checkbox.value = service.name; // Store the service name as value
        checkbox.id = `service-${service.id}`; // Assign a unique ID for each checkbox
        label.textContent = ` ${service.name}`;
        label.prepend(checkbox);

        // If a checkbox state is found, set its checked status
        if (serviceState) {
            checkbox.checked = serviceState.checked;
        }

        // Add event listener to track checkbox state
        checkbox.addEventListener("change", (event) => {
            updateCheckboxState(service.name, event.target.checked);
        });

        // Append the label to the dropdown menu
        dropdownMenu.appendChild(label);
    });
}

// Update the checkbox state in the array
function updateCheckboxState(serviceName, isChecked) {
    // Find the service in the checkboxStates array and update its checked state
    const serviceIndex = checkboxStates.findIndex(
        (service) => service.serviceName === serviceName
    );
    if (serviceIndex !== -1) {
        checkboxStates[serviceIndex].checked = isChecked;
    } else {
        // If the service is not found, add a new entry
        checkboxStates.push({
            serviceName: serviceName,
            checked: isChecked,
        });
    }
}

// Event listener for the dropdown button to trigger the dropdown
document
    .getElementById("dropdown-btn")
    .addEventListener("mouseenter", fetchServices); // Fetch services when mouse enters the dropdown button
