# Project Name: (Simple Arcade)
## Project Summary: (This project will create a simple Arcade with scoreboards and competitions based on the implemented game.)
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name:

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
- - [x] \(11/08/21) User will be able to register a new account
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/register.php
    - Pull Requests
      - PR link #1 https://github.com/neilpatel13/it202-011/pull/9
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141237636-00625745-70b7-4725-a14a-a3b89fb07d84.png)
        - Screenshot #1 Showing Email Validation
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/90282158/141238002-55af2c65-b5e8-489c-acbd-81b1f67a68aa.png)
        - Screenshot #2 Showing password column is 60 characters and hashed
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/90282158/141399318-748014ae-eaa3-4098-88bc-22dfdcdf3ff8.png)
        - Screenshot #3 Showing duplicate email (Also shows email doesn't get cleared when form is submitted and server side validation fails)
      - Screenshot #4 ![image](https://user-images.githubusercontent.com/90282158/141399477-22c28039-4790-4a2c-8dc5-5461f3d21c74.png)
        - Screenshot #4 Showing duplicate username failure
      - Screenshot #5 ![image](https://user-images.githubusercontent.com/90282158/141239152-b26b7aea-ef7f-4f8a-83f3-f3ecb49c1c31.png)
        - Screenshot #5 Showing code for server side  password validation
      - Screenshot #6 ![image](https://user-images.githubusercontent.com/90282158/141239603-48b74273-4f5f-48fe-95c0-715f7f25e0e5.png)
        - Screenshot #6 Showing output for validation 
- - [x] \(11/08/21) User will be able to login to their account (given they enter the correct credentials)
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1 https://github.com/neilpatel13/it202-011/pull/9
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141240229-3ba6f0ce-9efa-4269-a642-de390152b4ef.png)
        - Screenshot #1 Attempting to login with email
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/90282158/141240472-f5a1fe76-50fb-4967-b32a-f80703a2d981.png)
        - Screenshot #2 Successful login with email
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/90282158/141240768-a2fb8d92-d881-4bd7-9422-400a234f0cf5.png)
        - Screenshot #3 Attempting login with username
      - Screenshot #4 ![image](https://user-images.githubusercontent.com/90282158/141241138-d84cc887-f098-4188-8708-7dc557adfc4f.png)
        - Screenshot #4 Showing non-existing user login attempt
      - Screenshot #5 ![image](https://user-images.githubusercontent.com/90282158/141241278-fc9c4015-84bc-468c-aef5-852d9523ec85.png)
        - Screenshot #5 Showing invalid password attempt
- - [x] \(11/08/21) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/logout.php
    - Pull Requests
      - PR link #1 https://github.com/neilpatel13/it202-011/pull/9
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141242039-2cd7dd0d-d4f8-40f6-8093-4b94dce4bb7c.png)
        - Screenshot #1 Sucessful logout
- - [x] \(11/08/21) Basic security rules implemented
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/partials/nav.php
    - Pull Requests
      - PR link #1 https://github.com/neilpatel13/it202-011/pull/9
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141243236-33f81811-2908-4b4e-bf95-30cd5aa8a07c.png)
        - Screenshot #1 Showing code for basic sercurity functions
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/90282158/141243351-46361e7c-103c-49b6-bb23-136a9505d5c3.png)
        - Screenshot #2 failed login permission
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/90282158/141243618-a9723980-4402-4ff7-9802-ebb8daf050bd.png)
        - Screenshot #3 failed admin permission
- - [x] \(11/08/21) Basic Roles implemented
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/create_role.php
    - Pull Requests
      - PR link #1 https://github.com/neilpatel13/it202-011/pull/31
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141392182-bee5f0b9-a0f5-4310-94b8-f9637e5356c6.png)
        - Screenshot #1 Database for User roles
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/90282158/141392329-a6cbd3c9-2158-486f-b7d8-8966bed02a75.png)
        - Screenshot #2 Database for Roles
      - Screenshot #3 ![image](https://user-images.githubusercontent.com/90282158/141392501-d1b8ebf7-d52a-4832-a8bb-698cab5c3858.png)
        - Screenshot #3 Outputing active roles
- - [x] \(11/08/21) Site should have basic styles/theme applied; everything should be styled
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/home.php
    - Pull Requests
      - PR link #1 (https://github.com/neilpatel13/it202-011/pull/31)
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141392651-59f4d101-3706-4431-801c-5ebfeed6d25e.png)
        - Screenshot #1 Basic styles applied, also used for user firendly output message 
      - Screenshot #2 ![image](https://user-images.githubusercontent.com/90282158/141392501-d1b8ebf7-d52a-4832-a8bb-698cab5c3858.png)
        - Screenshot #2 Also used for page style applied for roles
- - [x] \(11/08/21) Any output messages/errors should be “user friendly”
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/login.php
    - Pull Requests
      - PR link #1 (https://github.com/neilpatel13/it202-011/pull/31)
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141392651-59f4d101-3706-4431-801c-5ebfeed6d25e.png)
        - Screenshot #1 Basic styles applied, also used for user firendly output message 
- - [x] \(11/08/21) User will be able to see their profile
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 (https://github.com/neilpatel13/it202-011/pull/31)
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141398269-f003c70f-24e9-4e0f-813a-c0b20e4e7655.png)
        - Screenshot #1 User being able to see their profile
- - [x] \(11/08/21) User will be able to edit their profile
  -  List of Evidence of Feature Completion
    - Status: Complete
    - Direct Link: https://np656-prod.herokuapp.com/Project/profile.php
    - Pull Requests
      - PR link #1 (https://github.com/neilpatel13/it202-011/pull/31)
    - Screenshots
      - Screenshot #1 ![image](https://user-images.githubusercontent.com/90282158/141398361-f2b510f8-46e3-4fbe-bc3b-7ca16e825297.png)
        - Screenshot #1 Users updating their profile information and update their password
- Milestone 2

<table>
<tr><td>milestone 2</td></tr><tr><td>
<table>
<tr><td>F1 - Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class) (2021-12-05)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/game.php](https://np656-prod.herokuapp.com/Project/game.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/38](https://github.com/neilpatel13/it202-011/pull/38)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - The game that I will be implementing will be something like Space Invaders</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145902692-46e330d5-c5da-4003-b92b-d6629b8e330b.png">
<p>The game will have the player at the left side of the area shooting down enemy ships for points. The enemy ships will slowly coming down to the player and firre back at the player. The player must avoid the enemy ships and not get hit from other ships. there will be multiple types of ships with each type beeing different amounts of points.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - The system will save the user’s score at the end of the game if the user is logged in ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/game.php](https://np656-prod.herokuapp.com/Project/game.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/69](https://github.com/neilpatel13/it202-011/pull/69)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Website showing score is saved</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145904607-afcd8541-4d91-4ba8-9182-1d8d45378a3a.png">
<p>Game saving score if user is logged in
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - There should be a scores table (id, user_id, score, created) / Each received score is a new entry (scores will not be updated)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145908292-cbfb2427-20ff-43be-8f3d-5793bc51c04a.png">
<p>Score table in database and showing how each new score is recorded
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - The user will be able to see their last 10 scores (2021-12-05)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - The user will be able to see their last 10 scores, Show on their profile page, Ordered by most recent</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145919880-d030be92-606e-4073-bd59-99006c0def93.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Create functions that output the following scoreboards (this will be used later) (2021-12-05)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Code to get top ten score board, </td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145919977-dec21f94-ac99-4456-9776-bad9f5c2cfca.png">
<p>Code to get top ten score board, currently competitons hasn't been built yet, so no scorboards can be shown right now.
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
- Milestone 3

<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - Users will have points associated with their account. (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/lib/functions.php](https://np656-prod.herokuapp.com/lib/functions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/72](https://github.com/neilpatel13/it202-011/pull/72)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Alter the User table to include points with a default of 0.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147184043-17b2dd75-ce0c-4116-8d61-980098fb66a5.png">
<p>incomplete but strong attempt on files from advice from the professor.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Points should show on their profile page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147183994-f2b80927-ae2d-4fbc-ab0d-ff645d112bb4.png">
<p>incomplete but strong attempt on files from advice from the professor.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Create a PointsHistory table (id, user_id, point_change, reason, created) (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/sql/008_create_table_pointshistory.sql](https://np656-prod.herokuapp.com/Project/sql/008_create_table_pointshistory.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/72](https://github.com/neilpatel13/it202-011/pull/72)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Any new entry should update the user’s points value (do not update the User points column directly)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147184128-2bc5cef5-67c7-45b7-85d2-1f0f365d1f9b.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Competitions table should have the following columns (id, name, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified) ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/sql/008_create_table_competitions.sql](https://np656-prod.herokuapp.com/Project/sql/008_create_table_competitions.sql)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/72](https://github.com/neilpatel13/it202-011/pull/72)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147184312-8db19b79-0a5f-48c2-b063-f5e17f54bc51.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User will be able to create a competition ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/create_competition.php](https://np656-prod.herokuapp.com/Project/create_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/72](https://github.com/neilpatel13/it202-011/pull/72)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147184072-bce46a8e-46ad-4aef-a8d7-eb03aecbaf5d.png">
<p>incomplete but strong attempt on files from advice from the professor.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F5 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Have a page where the User can see active competitions (not expired) ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F6 - For this milestone limit the output to a maximum of 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Order the results by soonest to expire</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Will need an association table CompetitionParticipants (id, comp_id, user_id, created) ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F7 - Comp_id and user_id should be a composite unique key (user can only join a competition once)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User can join active competitions  ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F8 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Create function that calculates competition winners ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F9 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>

- Milestone 4

<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - feature1: User can set their profile to be public or private (will need another column in Users table)  (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147187203-cb5382e6-c394-49be-a054-783f425070ff.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Feature 2: User will be able to see their competition history (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Limit to 10 results</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147186924-959283ab-44cd-4980-bd02-a598604e096e.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Paginate anything after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - If no results, show the appropriate message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Feature 3: User with the role of “admin” can edit a competition where paid_out = false ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F3 - They can adjust any of the regular form values</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - If the competition was expired they can update the duration to include extra time</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Feature 4: Add pagination to the Active Competitions view ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F4 - Show 10 competitions per page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Paginate anything after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If no results, show the appropriate message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Feature 5: Anywhere a username is displayed should be a link to that user’s profile ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F5 - This includes all scoreboards</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F5 - If the profile is private you can have the page just display “this profile is private” upon access</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Feature 6: Viewing an active or expired competition should show the top 10 scoreboard related to that competition ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F6 - item 1</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Feature 7: Game should be fully implemented/complete by this point (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/game.php](https://np656-prod.herokuapp.com/Project/game.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Game should tell the player if they’re not logged in that their score will not be recorded.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147187110-83877d8a-33f6-4db6-ae92-a43eb1380ebd.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - Feature 8: User’s score history will include pagination (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Show latest 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/145919880-d030be92-606e-4073-bd59-99006c0def93.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Paginate after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show appropriate message for no results</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Feature 9: Home page will have a weekly, monthly, and lifetime scoreboard (2021-12-23)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://np656-prod.herokuapp.com/Project/profile.php](https://np656-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neilpatel13/it202-011/pull/70](https://github.com/neilpatel13/it202-011/pull/70)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Will also have a link to the game</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Scoreboards will show username and points for the session</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90282158/147186924-959283ab-44cd-4980-bd02-a598604e096e.png">
<p>(See requirement about username linking to profile)
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>

- Final Demo: 
https://mediaspace.njit.edu/media/Arcade+Project+Final+Demo/1_5ydcusv8

### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board