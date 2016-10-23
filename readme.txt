

Create the branch on your local machine and switch in this branch :
$ git checkout -b [name_of_your_new_branch]
git checkout -b att3nd4nc3-4pp-branch1

Push the branch on github :
$ git push origin [name_of_your_new_branch]
git push origin att3nd4nc3-4pp-branch1

When you want to commit something in your branch, be sure to be in your branch.
You can see all branches created by using :
$ git branch

Which will show :
* approval_messages
  master
  master_clean

Add a new remote for your branch :
$ git remote add [name_of_your_remote] 
$ git remote add -f att3nd4nc3-4pp-branch1-remote https://github.com/fajarnugrohoid/att3nd4nc3-4pp.git

Push changes from your commit into your branch :
$ git push [name_of_your_new_remote] [name_of_your_branch]
git push att3nd4nc3-4pp-branch1-remote att3nd4nc3-4pp-branch1

Update your branch when the original branch from official repository has been updated :
$ git fetch [name_of_your_remote]
it fetch att3nd4nc3-4pp-branch1-remote

Then you need to apply to merge changes, if your branch is derivated from develop you need to do :
$ git merge [name_of_your_remote]/develop

Delete a branch on your local filesystem :
$ git branch -d [name_of_your_new_branch]

To force the deletion of local branch on your filesystem :
$ git branch -D [name_of_your_new_branch]

Delete the branch on github :
$ git push origin :[name_of_your_new_branch]

//for switch to origin
 git checkout origin

//for switch to branch
 git checkout att3nd4nc3-4pp-branch1

//clone branch and create new folder name att3nd4nc3-4pp-branch1
git clone -b att3nd4nc3-4pp-branch1 https://github.com/fajarnugrohoid/att3nd4nc3-4pp.git att3nd4nc3-4pp-branch1