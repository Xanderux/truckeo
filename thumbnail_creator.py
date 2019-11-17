import os, sys
from PIL import Image
import os.path

def create_thumbmail(infile):
	outfile = os.path.splitext(infile)[0] + "_resized.jpg"
	if infile != outfile:
	    try:
	        im = Image.open(infile)
	        size = int(im.size[0]/2), int(im.size[1]/2)
	        im.thumbnail(size, Image.BICUBIC)
	        im.save(outfile, "JPEG")
	        os.remove(infile)
	    except IOError:
	        print("cannot create thumbnail for '%s'" % infile)

def get_files(target_dir):
    item_list = os.listdir(target_dir)

    file_list = list()
    for item in item_list:
        item_dir = os.path.join(target_dir,item)
        if os.path.isdir(item_dir):
            file_list += get_files(item_dir)
        else:
            file_list.append(item_dir)
    return file_list

files = get_files("./imgs")
for file in files:
	create_thumbmail(file)
