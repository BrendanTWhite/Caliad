#!/bin/bash

# A script to link everything in the public directory to a given location,
# namely the directory that the web server serves from

# First set up some constants
directorykey="LINK_PUBLIC_TO="
keylength=${#directorykey}
public_directory="./public/"
pub_dir_len=${#public_directory}

# Then get the directory to put the links in, from the .env file
myline=$(cat .env | grep "LINK_PUBLIC_TO=")

# ...and strip out the key
mydirectory=${myline:keylength}

echo "About to start..."

# Then loop through all files in the public directory and link them
for orig_file_and_path in $public_directory*
do
  # strip out directory
  justfile=${orig_file_and_path:pub_dir_len}
  # now get the full path to the original file
  fullpath=$(readlink -f $orig_file_and_path)
  # Remove old link (if it was there)
  rm -f $mydirectory$justfile
  # and finally link from the full path of the old file to the new location
  echo "  Attempting to link from $fullpath to $mydirectory$justfile..."
  ln -s $fullpath $mydirectory$justfile
  echo "  Done."
done

echo "All finished."
