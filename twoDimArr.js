// Create a 2D array
let salesRegions = [
  ["North", "South", "East", "West"],
  ["Bob", "Sue", "Nathan", "Wanda"],
  ["Stef", "Janice", "Henry", "Charles"],
  ["Ron", "Will", "Kimmy", "Pete"],
];

// Print section title
console.log("Section 1: Two-Dimensional Array.");

// Display the contents of the array by sales region
for (let i = 0; i < salesRegions.length; i++) {
  let region = salesRegions[i][0]; // Get the region name
  console.log(`${region}:`);
  for (let j = 1; j < salesRegions[i].length; j++) {
    console.log(`- ${salesRegions[i][j]}`);
  }
}
