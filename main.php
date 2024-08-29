<?php
require_once 'src/charities.php';
require_once 'src/donations.php';
$charity = [];
$donation = [];

while (true) {
    echo "1. To view charities type 'view' \n";
    echo "2. To edit charities type 'edit' \n";
    echo "3. To delete charities type 'delete' \n";
    echo "4. To add charities type 'addCharity' \n";
    echo "5. To add donation type 'addDonation' \n";
    echo "6. To exit type 'exit' \n";
    $input = readline("Enter your choice: ");

    switch ($input) {
        case 'view':
            if (empty($charity)) {
                echo "No charities available\n";
            } else {
                foreach ($charity as $charities) {
                    echo "Charity ID: " . $charities->getId() . "\n";
                    echo "Charity Name: " . $charities->getCharityName() . "\n";
                    echo "Charity Representative Email: " . $charities->getRepEmail() . "\n";
                }
            }
            break;
        case 'edit':
            if (empty($charity)) {
                echo "No charities available\n";
            } else {
                $id = readline("Enter charity id: ");

                foreach ($charity as $charities) {
                    if ($charities->getId() == $id) {
                        $charities->updateCharity();
                        echo "Charity updated successfully\n";
                        break;
                    }
                }
            }
            break;
        case 'delete':
            if (empty($charity)) {
                echo "No charities available\n";
            } else {
                $id = readline("Enter charity id: ");
                foreach ($charity as $key => $charities) {
                    if ($charities->getId() == $id) {
                        unset($charity[$key]);
echo "Charity deleted successfully\n";

                        break;
                    }
                }
            }
            break;
        case 'addCharity':
            $id = count($charity) + 1;
            $charity[] = new Charities($id, null, null);
            end($charity)->addCharity();
            echo "Charity added successfully\n";
            break;
        case 'addDonation':
            $id = count($donation) + 1;
            $charityId = readline("Enter charity id: ");
            $charityExist = false;
            foreach ($charity as $charities) {
                if ($charities->getId() == $charityId) {
                    $charityExist = true;
                }
            }
            if ($charityExist) {
                $donation[] = new Donations($id, null, null, $charityId, null);
                end($donation)->addDonation();
                echo "Donation added successfully\n";
            } else {
                echo "Charity does not exist\n";
            }
            break;
        case 'exit':
            exit();
            break;
        default:
            echo "Invalid choice\n";
            break;
    }
}
