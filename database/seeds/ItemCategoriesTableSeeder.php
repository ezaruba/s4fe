<?php

use Illuminate\Database\Seeder;

class ItemCategoriesTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{            
        $item_categories = 
        [
            ['id' => 1, 'parent_id' => null,'name' => "Accessories", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 2, 'parent_id' => 1, 'name' => "Handbags", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 3, 'parent_id' => 1, 'name' => "Travel Bags", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 4, 'parent_id' => 1, 'name' => "Suitcases", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 5, 'parent_id' => 1, 'name' => "Wallets", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 6, 'parent_id' => 1, 'name' => "Skins & Travel Cases", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 7, 'parent_id' => 1, 'name' => "Batteries", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 8, 'parent_id' => 1, 'name' => "Cables & Adapters", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 9, 'parent_id' => 1, 'name' => "Chargers & Charging Docks", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 10, 'parent_id' => 1, 'name' => "Controllers & Attachments", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 11, 'parent_id' => 1, 'name' => "Cooling Devices", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 12, 'parent_id' => 1, 'name' => "Faceplates, Decals & Stickers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 13, 'parent_id' => 1, 'name' => "Hard Drives", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 14, 'parent_id' => 1, 'name' => "Headsets", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 15, 'parent_id' => 1, 'name' => "Keyboards & Keypads", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 16, 'parent_id' => 1, 'name' => "Memory Cards & Expansion Packs", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 17, 'parent_id' => 1, 'name' => "Motion Sensors & Cameras", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 18, 'parent_id' => 1, 'name' => "Mounts & Stands", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 19, 'parent_id' => 1, 'name' => "Screen Protectors", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 20, 'parent_id' => 1, 'name' => "Styluses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 21, 'parent_id' => 1, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 22, 'parent_id' => null, 'name' => "Automotive", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 23, 'parent_id' => 22, 'name' => "Vehicles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 24, 'parent_id' => 22, 'name' => "Trucks", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 25, 'parent_id' => 22, 'name' => "RV", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 26, 'parent_id' => 22, 'name' => "Trailers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 27, 'parent_id' => 22, 'name' => "Motorcycles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 28, 'parent_id' => 22, 'name' => "Scooters", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 29, 'parent_id' => 22, 'name' => "Snowmobiles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 30, 'parent_id' => 22, 'name' => "ATV", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 31, 'parent_id' => 22, 'name' => "Automotive Parts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 32, 'parent_id' => 22, 'name' => "Motorcycle Parts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 33, 'parent_id' => 22, 'name' => "Scooter Parts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 34, 'parent_id' => 22, 'name' => "Snowmobile Parts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 35, 'parent_id' => 22, 'name' => "Car Electronics", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 36, 'parent_id' => 22, 'name' => "Car Audio & Video", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 37, 'parent_id' => 22, 'name' => "GPS Systems", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 38, 'parent_id' => 22, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 39, 'parent_id' => null, 'name' => "Bicycles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 40, 'parent_id' => 39, 'name' => "Mountain Bikes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 41, 'parent_id' => 39, 'name' => "Race Bikes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 42, 'parent_id' => 39, 'name' => "Single Speed Bikes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 43, 'parent_id' => 39, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 44, 'parent_id' => null, 'name' => "Businesses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 45, 'parent_id' => 44, 'name' => "Machinery", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 46, 'parent_id' => 44, 'name' => "Office Equipment", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 47, 'parent_id' => 44, 'name' => "Electrical Equipment & Supplies", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 48, 'parent_id' => 44, 'name' => "Fasteners & Hardware", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 49, 'parent_id' => 44, 'name' => "Hand Tools", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 50, 'parent_id' => 44, 'name' => "Healthcare, Lab & Dental", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 51, 'parent_id' => 44, 'name' => "HVAC", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 52, 'parent_id' => 44, 'name' => "Hydraulics, Pneumatics, Pumps & Plumbing", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 53, 'parent_id' => 44, 'name' => "Industrial, Measuring Tools", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 54, 'parent_id' => 44, 'name' => "Manufacturing & Woodworking", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 55, 'parent_id' => 44, 'name' => "Material Handling", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 56, 'parent_id' => 44, 'name' => "Metalworking/Milling/Welding", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 57, 'parent_id' => 44, 'name' => "Power Tools", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 58, 'parent_id' => 44, 'name' => "Printing & Graphic Arts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 59, 'parent_id' => 44, 'name' => "Restaurant & Food Service", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 60, 'parent_id' => 44, 'name' => "Retail & Shop Fitting", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 61, 'parent_id' => 44, 'name' => "Telephone & Answering Systems", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 62, 'parent_id' => 44, 'name' => "Test, Measurement & Inspection", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 63, 'parent_id' => 44, 'name' => "Video Broadcasting & Recording", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 64, 'parent_id' => 44, 'name' => "Web Domains/ Email/ Software", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 65, 'parent_id' => 44, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 66, 'parent_id' => null, 'name' => "Clothes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 67, 'parent_id' => 66, 'name' => "Jackets", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 68, 'parent_id' => 66, 'name' => "Coats", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 69, 'parent_id' => 66, 'name' => "Pants", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 70, 'parent_id' => 66, 'name' => "Dresses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 71, 'parent_id' => 66, 'name' => "Suits", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 72, 'parent_id' => 66, 'name' => "Shirts", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 73, 'parent_id' => 66, 'name' => "Sweats", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 74, 'parent_id' => 66, 'name' => "Shoes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 75, 'parent_id' => 66, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 76, 'parent_id' => null, 'name' => "Coins, Paper Money & Certificates", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 77, 'parent_id' => 76, 'name' => "Coins", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 78, 'parent_id' => 76, 'name' => "Paper Money", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 79, 'parent_id' => 76, 'name' => "Stock / Bond / Share Certificates", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 80, 'parent_id' => 76, 'name' => "Cheques", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 81, 'parent_id' => 76, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 82, 'parent_id' => null, 'name' => "Collectables", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 83, 'parent_id' => 82, 'name' => "Card Games", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 84, 'parent_id' => 82, 'name' => "Decorative Ornaments & Plates", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 85, 'parent_id' => 82, 'name' => "Virtual & Crypto", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 86, 'parent_id' => 82, 'name' => "Ethnographic", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 87, 'parent_id' => 82, 'name' => "Fantasy, Myth & Magic", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 88, 'parent_id' => 82, 'name' => "Country Flags", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 89, 'parent_id' => 82, 'name' => "Household", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 90, 'parent_id' => 82, 'name' => "Jukeboxes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 91, 'parent_id' => 82, 'name' => "Keyrings", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 92, 'parent_id' => 82, 'name' => "Kitchenalia", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 93, 'parent_id' => 82, 'name' => "Masonic", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 94, 'parent_id' => 82, 'name' => "Memorabilia", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 95, 'parent_id' => 82, 'name' => "Metalware", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 96, 'parent_id' => 82, 'name' => "Militaria", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 97, 'parent_id' => 82, 'name' => "Model Railways & Trains", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 98, 'parent_id' => 82, 'name' => "Moneyboxes & Piggy Banks", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 99, 'parent_id' => 82, 'name' => "Non-Sport Trading Cards", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 100, 'parent_id' => 82, 'name' => "Paper & Ephemera", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 101, 'parent_id' => 82, 'name' => "Pens & Writing Equipment", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 102, 'parent_id' => 82, 'name' => "Phone Cards", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 103, 'parent_id' => 82, 'name' => "Photographic Images", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 104, 'parent_id' => 82, 'name' => "Postcards", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 105, 'parent_id' => 82, 'name' => "Radio, Television & Telephony", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 106, 'parent_id' => 82, 'name' => "Religion & Spirituality", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 107, 'parent_id' => 82, 'name' => "Rocks, Fossils & Minerals", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 108, 'parent_id' => 82, 'name' => "Royalty", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 109, 'parent_id' => 82, 'name' => "Science Fiction", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 110, 'parent_id' => 82, 'name' => "Sewing, Fabric & Textiles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 111, 'parent_id' => 82, 'name' => "Theatre Posters", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 112, 'parent_id' => 82, 'name' => "Tobacciana & Smoking Supplies", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 113, 'parent_id' => 82, 'name' => "Tools & Collectable Hardware", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 114, 'parent_id' => 82, 'name' => "Transportation", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 115, 'parent_id' => 82, 'name' => "Vanity, Perfume & Grooming", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 116, 'parent_id' => 82, 'name' => "Vintage & Retro", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 117, 'parent_id' => 82, 'name' => "Weird Stuff", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 118, 'parent_id' => 82, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 119, 'parent_id' => null, 'name' => "Electronics", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 120, 'parent_id' => 119, 'name' => "Cameras", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 121, 'parent_id' => 119, 'name' => "Cell Phones", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 122, 'parent_id' => 119, 'name' => "Tablets", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 123, 'parent_id' => 119, 'name' => "eBook Readers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 124, 'parent_id' => 119, 'name' => "Smart Watches", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 125, 'parent_id' => 119, 'name' => "MP 3 Players", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 126, 'parent_id' => 119, 'name' => "Accessories", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 127, 'parent_id' => 119, 'name' => "Monitors", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 128, 'parent_id' => 119, 'name' => "Desktop Computers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 129, 'parent_id' => 119, 'name' => "Drives & Storage Media", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 130, 'parent_id' => 119, 'name' => "Laptops", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 131, 'parent_id' => 119, 'name' => "Printers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 132, 'parent_id' => 119, 'name' => "Hardware & Network", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 133, 'parent_id' => 119, 'name' => "TV", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 134, 'parent_id' => 119, 'name' => "Home Audio & Video", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 135, 'parent_id' => 119, 'name' => "VR Equipment", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 136, 'parent_id' => 119, 'name' => "Game Consoles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 137, 'parent_id' => 119, 'name' => "Smart Home", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 138, 'parent_id' => 119, 'name' => "Home Surveillance", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 139, 'parent_id' => 119, 'name' => "Media Streamers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 140, 'parent_id' => 119, 'name' => "Drones", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 141, 'parent_id' => 119, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 142, 'parent_id' => null, 'name' => "Furniture", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 143, 'parent_id' => 142, 'name' => "Antique", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 144, 'parent_id' => 142, 'name' => "Office", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 145, 'parent_id' => 142, 'name' => "Caregiving", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 146, 'parent_id' => 142, 'name' => "Houses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 147, 'parent_id' => 142, 'name' => "Garden & Patio", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 148, 'parent_id' => 142, 'name' => "Mobility", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 149, 'parent_id' => 142, 'name' => "Bean Bags & Inflatables", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 150, 'parent_id' => 142, 'name' => "Bed Guards", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 151, 'parent_id' => 142, 'name' => "Bedframes & Divan Bases", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 152, 'parent_id' => 142, 'name' => "Bedroom Furniture Sets", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 153, 'parent_id' => 142, 'name' => "Beds with Mattresses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 154, 'parent_id' => 142, 'name' => "Benches", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 155, 'parent_id' => 142, 'name' => "Bookcases, Shelving & Storage", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 156, 'parent_id' => 142, 'name' => "Desks", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 157, 'parent_id' => 142, 'name' => "Dressing Tables", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 158, 'parent_id' => 142, 'name' => "Mattresses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 159, 'parent_id' => 142, 'name' => "Sofas & Armchairs", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 160, 'parent_id' => 142, 'name' => "Stools", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 161, 'parent_id' => 142, 'name' => "Tables & Chairs", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 162, 'parent_id' => 142, 'name' => "Toy Boxes & Chests", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 163, 'parent_id' => 142, 'name' => "Wardrobes", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 164, 'parent_id' => 142, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 165, 'parent_id' => null, 'name' => "Appliances", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 166, 'parent_id' => 165, 'name' => "Coffee, Tea & Espresso Makers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 167, 'parent_id' => 165, 'name' => "Cookers, Ovens & Hobs", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 168, 'parent_id' => 165, 'name' => "Dishwasher Parts & Accessories", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 169, 'parent_id' => 165, 'name' => "Fridges & Freezers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 170, 'parent_id' => 165, 'name' => "Ironing & Vacuuming", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 171, 'parent_id' => 165, 'name' => "Small Kitchen Appliances", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 172, 'parent_id' => 165, 'name' => "Washing Machines & Dryers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 173, 'parent_id' => 165, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
            ['id' => 174, 'parent_id' => null, 'name' => "Toys", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 175, 'parent_id' => 174, 'name' => "Diecast & Vehicles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 176, 'parent_id' => 174, 'name' => "Jigsaws & Puzzles", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 177, 'parent_id' => 174, 'name' => "Educational", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 178, 'parent_id' => 174, 'name' => "Kites", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 179, 'parent_id' => 174, 'name' => "Paddling Pools", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 180, 'parent_id' => 174, 'name' => "Playhouses", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 181, 'parent_id' => 174, 'name' => "Scooters", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 182, 'parent_id' => 174, 'name' => "Skates", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 183, 'parent_id' => 174, 'name' => "Cars", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 184, 'parent_id' => 174, 'name' => "Soldiers", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 185, 'parent_id' => 174, 'name' => "Wargames & Role-Playing", 'created_date' => date('Y-m-d H:i:s')],
                ['id' => 186, 'parent_id' => 174, 'name' => "Other", 'created_date' => date('Y-m-d H:i:s')],
        ];
        $ids = [];
        foreach($item_categories as $item_category)
        {
            $ids[] = $item_category['id'];
            if(!\App\Models\Category::whereId($item_category['id'])->update(['name' => $item_category['name']]))
            {
                \App\Models\Category::create($item_category);
            }
        }
        \App\Models\Category::whereNotIn('id',$ids)->delete();
}
}
