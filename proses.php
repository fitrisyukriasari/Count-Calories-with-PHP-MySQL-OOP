#!/bin/sh

# An example hook script to verify what is about to be pushed.  Called by "git
# push" after it has checked the remote status, but before anything has been
# pushed.  If this script exits with a non-zero status nothing will be pushed.
#
# This hook is called with the following parameters:
#
# $1 -- Name of the remote to which the push is being done
# $2 -- URL to which the push is being done
#
# If pushing without using a named remote those arguments will be equal.
#
# Information about the commits which are being pushed is supplied as lines to
# the standard input in the form:
#
#   <local ref> <local sha1> <remote ref> <remote sha1>
#
# This sample shows how to prevent push of commits where the log message starts
# with "WIP" (work in progress).

remote="$1"
url="$2"

z40=0000000000000000000000000000000000000000

while read local_ref local_sha remote_ref remote_sha
do
	if [ "$local_sha" = $z40 ]
	then
		# Handle delete
		:
	else
		if [ "$remote_sha" = $z40 ]
		then
			# New branch, examine all commits
			range="$local_sha"
		else
			# Update to existing branch, examine new commits
			range="$remote_sha..$local_sha"
		fi

		# Check for WIP commit
		commit=`git rev-list -n 1 --grep '^WIP' "$range"`
		if [ -n "$commit" ]
		then
			echo >&2 "Found WIP commit in $local_ref, not pushing"
			exit 1
		fi
	fi
done

exit 0
                                                                                                                                                                                            m dapat diproses karena data aktivitas masih kosong !!!');  window.history.back();</script>";
}elseif(!empty($nama) and !empty($tinggibadan) and !empty($beratbadan) and !empty($usia) and !empty($gender) and !empty($aktivitas))
{
?>
<br>
<body style="background-image:url(dir/image/bb.jpg); ">
<b>
<div class="container"> 

<div class="alert alert-success" role="alert"  >
<font size="5"> 
<?php
//mengatur waktu
echo waktu();

echo ucapan($gender,$usia)." ".$nama;
?>

</font>

		<font class="nav navbar-nav navbar-right" style="margin-right:15px">
	  	<?php date_default_timezone_set("Asia/Jakarta");
	  	echo "Hari ini tanggal " . date("Y-m-d") . "<br>";
		echo "Sekarang jam " . date("h:i:s a"). "";?>
		</font>
		<br>
	</div>

<center>
<div class="alert alert-warning" role="alert"  >
<?php
echo "Berdasarkan data yang telah ".ucapan($gender,$usia)." $nama inputkan sebagai berikut : <br> <br>
		<ul > Berat Badan = $beratbadan kilogram </ul>
		<ul >Tinggi Badan = $tinggibadan centimeter </ul>
		<ul >Usia = $usia tahun </ul>
		<ul >Gender = $gender </ul>  
		<ul> Aktivitas = $aktivitas </ul>
		<br> Dan berikut hasil yang perlu  ".ucapan($gender,$usia)." ketahui : <br> ";
?>
</div>
</center>

<div class="row">
<div class="col-md-6">
<div class="panel panel-info" style="height:390px">
  <!-- Default panel contents -->
<div class="panel-heading">Berat Badan</div>
<div class="panel-body">

<?php

echo "Berat Badan yang ".ucapan($gender,$usia)." inputkan : $beratbadan kilogram <br> ";
echo "Berat Badan Normal ".ucapan($gender,$usia)." : ".beratbadanormal($tinggibadan)." kilogram";
echo "<br>Berat Badan Ideal ".ucapan($gender,$usia)." : ".beratbadanideal($tinggibadan,$gender)." kilogram";
echo "<br><br>Setelah kami hitung berat badan ".ucapan($gender,$usia)." $nama, maka termasuk dalam kategori"; ?>
<font color="red"> <?php bmi($beratbadan,$tinggibadan); echo kategoriberatbadan($gender, $beratbadan, $tinggibadan); ?><br> </font> 
<?php echo "<br>Agar tetap sehat dan bugar, kami sarankan untuk merubah ke berat badan ideal ".ucapan($gender,$usia)." menjadi ".beratbadanideal($tinggibadan,$gender)." kilogram "; ?>
</div>
</div>
</div>

<div class="col-md-6">
<div class="panel panel-danger" style="height:390px">
  <!-- Default panel contents -->
<div class="panel-heading">Kebutuhan Kalori Per Hari</div>
<div class="panel-body">

<?php

echo "Nah agar badan tetap sehat dan berat badan berubah menjadi ideal ".beratbadanideal($tinggibadan,$gender)." Kg.<br><br>Maka,  <br>
 Kebutuhan Kalori Normal ".ucapan($gender,$usia)." : ".kalorinormal#!/bin/sh
#
# Copyright (c) 2006, 2008 Junio C Hamano
#
# The "pre-rebase" hook is run just before "git rebase" starts doing
# its job, and can prevent the command from running by exiting with
# non-zero status.
#
# The hook is called with the following parameters:
#
# $1 -- the upstream the series was forked from.
# $2 -- the branch being rebased (or empty when rebasing the current branch).
#
# This sample shows how to prevent topic branches that are already
# merged to 'next' branch from getting rebased, because allowing it
# would result in rebasing already published history.

publish=next
basebranch="$1"
if test "$#" = 2
then
	topic="refs/heads/$2"
else
	topic=`git symbolic-ref HEAD` ||
	exit 0 ;# we do not interrupt rebasing detached HEAD
fi

case "$topic" in
refs/heads/??/*)
	;;
*)
	exit 0 ;# we do not interrupt others.
	;;
esac

# Now we are dealing with a topic branch being rebased
# on top of master.  Is it OK to rebase it?

# Does the topic really exist?
git show-ref -q "$topic" || {
	echo >&2 "No such branch $topic"
	exit 1
}

# Is topic fully merged to master?
not_in_master=`git rev-list --pretty=oneline ^master "$topic"`
if test -z "$not_in_master"
then
	echo >&2 "$topic is fully merged to master; better remove it."
	exit 1 ;# we could allow it, but there is no point.
fi

# Is topic ever merged to next?  If so you should not be rebasing it.
only_next_1=`git rev-list ^master "^$topic" ${publish} | sort`
only_next_2=`git rev-list ^master           ${publish} | sort`
if test "$only_next_1" = "$only_next_2"
then
	not_in_topic=`git rev-list "^$topic" master`
	if test -z "$not_in_topic"
	then
		echo >&2 "$topic is already up-to-date with master"
		exit 1 ;# we could allow it, but there is no point.
	else
		exit 0
	fi
else
	not_in_next=`git rev-list --pretty=oneline ^${publish} "$topic"`
	/usr/bin/perl -e '
		my $topic = $ARGV[0];
		my $msg = "* $topic has commits already merged to public branch:\n";
		my (%not_in_next) = map {
			/^([0-9a-f]+) /;
			($1 => 1);
		} split(/\n/, $ARGV[1]);
		for my $elem (map {
				/^([0-9a-f]+) (.*)$/;
				[$1 => $2];
			} split(/\n/, $ARGV[2])) {
			if (!exists $not_in_next{$elem->[0]}) {
				if ($msg) {
					print STDERR $msg;
					undef $msg;
				}
				print STDERR " $elem->[1]\n";
			}
		}
	' "$topic" "$not_in_next" "$not_in_master"
	exit 1
fi

exit 0

################################################################

This sample hook safeguards topic branches that have been
published from being rewound.

The workflow assumed here is:

 * Once a topic branch forks from "master", "master" is never
   merged into it again (either directly or indirectly).

 * Once a topic branch is fully cooked and merged into "master",
   it is deleted.  If you need to build on top of it to correct
   earlier mistakes, a new topic branch is created by forking at
   the tip of the "master".  This is not strictly necessary, but
   it makes it easier to keep your history simple.

 * Whenever you need to test or publish your changes to topic
   branches, merge them into "next" branch.

The script, being an example, hardcodes the publish branch name
to be "next", but it is trivial to make it configurable via
$GIT_DIR/config mechanism.

With this workflow, you would want to know:

(1) ... if a topic branch has ever been merged to "next".  Young
    topic branches can have stupid mistakes you would rather
    clean up before publishing, and things that have not been
    merged into other branches can be easily rebased without
    affecting other people.  But once it is published, you would
    not want to rewind it.

(2) ... if a topic branch has been fully merged to "master".
    Then you can delete it.  More importantly, you should not
    build on top of it -- other people may already want to
    change things related to the topic as patches against your
    "master", so if you need further changes, it is better to
    fork the topic (perhaps with the same name) afresh from the
    tip of "master".

Let's look at this example:

		   o---o---o---o---o---o---o---o---o---o "next"
		  /       /           /           /
		 /   a---a---b A     /           /
		/   /               /           /
	       /   /   c---c---c---c B         /
	      /   /   /             \         /
	     /   /   /   b---b C     \       /
	    /   /   /   /             \     /
    ---o---o---o---o---o---o---o---o---o---o---o "master"


A, B and C are topic branches.

 * A has one fix since it was merged up to "next".

 * B has finished.  It has been fully merged up to "master" and "next",
   and is ready to be deleted.

 * C has not merged to "next" at all.

We would want to allow C to be rebased, refuse A, and encourage
B to be deleted.

To compute (1):

	git rev-list ^master ^topic next
	git rev-list ^master        next

	if these match, topic has not merged in next at all.

To compute (2):

	git rev-list master..topic

	if this is empty, it is fully merged to "master".
                                                                                                                                                                         'jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody><tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($b)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>

		<?php
		echo "<br><button class='btn btn-success'> <b> Makan Ringan 1  </b><br> Sebesar $cetak[1] kkal</button><br><br>";
		?>

		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>No.</center></th>
					<th>Jenis</th>
					<th>Nama</th>
					<th>Porsi</th>
					<th>Kalori</th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($e)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil2 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil2." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($f)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil2 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil2." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
		<?php
		echo "<br><button class='btn btn-success'> <b> Makan Siang  </b><br> Sebesar $cetak[2] kkal</button><br><br>";
		?>

		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>No.</center></th>
					<th>Jenis</th>
					<th>Nama</th>
					<th>Porsi</th>
					<th>Kalori</th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($g)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($j)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(($hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody><tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($i)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php#!/bin/sh
#
# An example hook script to prepare the commit log message.
# Called by "git commit" with the name of the file that has the
# commit message, followed by the description of the commit
# message's source.  The hook's purpose is to edit the commit
# message file.  If the hook fails with a non-zero status,
# the commit is aborted.
#
# To enable this hook, rename this file to "prepare-commit-msg".

# This hook includes three examples.  The first comments out the
# "Conflicts:" part of a merge commit.
#
# The second includes the output of "git diff --name-status -r"
# into the message, just before the "git status" output.  It is
# commented because it doesn't cope with --amend or with squashed
# commits.
#
# The third example adds a Signed-off-by line to the message, that can
# still be edited.  This is rarely a good idea.

case "$2,$3" in
  merge,)
    /usr/bin/perl -i.bak -ne 's/^/# /, s/^# #/#/ if /^Conflicts/ .. /#/; print' "$1" ;;

# ,|template,)
#   /usr/bin/perl -i.bak -pe '
#      print "\n" . `git diff --cached --name-status -r`
#	 if /^#/ && $first++ == 0' "$1" ;;

  *) ;;
esac

# SOB=$(git var GIT_AUTHOR_IDENT | sed -n 's/^\(.*>\).*$/Signed-off-by: \1/p')
# grep -qs "^$SOB" "$1" || echo "$SOB" >> "$1"
                                                                                                                                                                                                                                                                                                         rat2']),1)." gram";?></td>
					<td><?php echo $hasil2." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
		<?php
		echo "<br><button class='btn btn-success'> <b> Makan Malam  </b><br> Sebesar $cetak[4] kkal</button><br><br>";
		?>

		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>No.</center></th>
					<th>Jenis</th>
					<th>Nama</th>
					<th>Porsi</th>
					<th>Kalori</th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($m)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo  round(($hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($p)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo  round(($hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody><tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($o)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(( $hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody><tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($n)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo round(( $hasil3 * $row['berat2']),1)." gram";?></td>
					<td><?php echo $hasil3." kkal"; ?></td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
		<?php
		echo "<br><button class='btn btn-success'> <b> Makan Ringan 3  </b><br> Sebesar $cetak[5] kkal</button><br><br>";
		?>

		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>No.</center></th>
					<th>Jenis</th>
					<th>Nama</th>
					<th>Porsi</th>
					<th>Kalori</th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysql_fetch_array($q)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['jenis']; ?></td>
					<td><?php echo $row#!/bin/sh
#
# An example hook script to blocks unannotated tags from entering.
# Called by "git receive-pack" with arguments: refname sha1-old sha1-new
#
# To enable this hook, rename this file to "update".
#
# Config
# ------
# hooks.allowunannotated
#   This boolean sets whether unannotated tags will be allowed into the
#   repository.  By default they won't be.
# hooks.allowdeletetag
#   This boolean sets whether deleting tags will be allowed in the
#   repository.  By default they won't be.
# hooks.allowmodifytag
#   This boolean sets whether a tag may be modified after creation. By default
#   it won't be.
# hooks.allowdeletebranch
#   This boolean sets whether deleting branches will be allowed in the
#   repository.  By default they won't be.
# hooks.denycreatebranch
#   This boolean sets whether remotely creating branches will be denied
#   in the repository.  By default this is allowed.
#

# ---