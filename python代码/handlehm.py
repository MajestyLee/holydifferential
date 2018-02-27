#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的MIX数据进行处理 formal test 1
# written by MajestyLee 2017/4/12
import sys
import csv
reload(sys)
sys.setdefaultencoding('utf-8')
from numpy import *
x_file_names = ['x_chr1','x_chr2','x_chr3','x_chr4','x_chr5','x_chr6','x_chr7',
	'x_chr8','x_chr9','x_chr10','x_chr11','x_chr12','x_chr13','x_chr14','x_chr15',
	'x_chr16','x_chr17','x_chr18','x_chr19','x_chr20','x_chr21','x_chr22','x_chr23','x_chr24'] #total data
or_file_names = ['or_chr2','or_chr3','or_chr4','or_chr5','or_chr6','or_chr7',
	'or_chr8','or_chr9','or_chr10','or_chr11','or_chr12','or_chr13','or_chr14','or_chr15',
	'or_chr16','or_chr17','or_chr18','or_chr19','or_chr20','or_chr21','or_chr22','or_chr23','or_chr24'] #total data
data = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
for i in range(23):
	file_name1 = x_file_names[i+1]
	file_name2 = or_file_names[i]
	file_name = "mix_chr" + str(i+2)
	for j in range(6):
		file_name3 = "chr/" + file_name1 + "_m" + str(j+1) + ".txt"
		file_name4 = "chr/" + file_name2 + "_m" + str(j+1) + ".txt"
		file_name5 = "chr/" + file_name + "_m" + str(j+1) + ".txt"
		file3 = open(file_name3)
		file4 = open(file_name4)
		file5 = open(file_name5)
		count = 0
		th1 = 0
		th2 = 0
		th3 = 0
		while True:
			line1 = file3.readline()
			if not line1:
				break
			L = line1.split()
			line2 = file4.readline()
			if not line2:
				break
			L2 = line2.split()
			line3 = file5.readline()
			if not line3:
				break
			L3 = line3.split()
			ii = 0
			iii = 0
			iiii = 0
			for ii in range(5):
				th1 = th1 + int(L[ii+1])
				count = count + 1
			for iii in range(15):
				th2 = th2 + int(L2[iii+1])
			for iiii in range(10):
				th3 = th3 + int(L3[iiii+1])
		file3.close()
		file4.close()
		file5.close()
		th1 = th1 / count
		th2 = th2 / count
		th2 = th2 / 3
		th3 = th3 / count
		th3 = th3 / 2
		print th1,th2,th3
		file3 = open(file_name3)
		file4 = open(file_name4)
		file5 = open(file_name5)
		file_name6 = "chr_hm/" + file_name1 + "_m" + str(j+1) + "_hm.txt"
		file_name7 = "chr_hm/" + file_name2 + "_m" + str(j+1) + "_hm.txt"
		file_name8 = "chr_hm/" + file_name + "_m" + str(j+1) + "_hm.txt"
		file6 = open(file_name6,'w')
		file7 = open(file_name7,'w')
		file8 = open(file_name8,'w')
		while True:
			line1 = file3.readline()
			if not line1:
				break
			L = line1.split()
			line2 = file4.readline()
			if not line2:
				break
			L2 = line2.split()
			line3 = file5.readline()
			if not line3:
				break
			L3 = line3.split()
			ii = 0
			LL = L
			for ii in range(5):
				if int(L[ii+1]) > th1:
					LL[ii+1] = '1'
				else:
					LL[ii+1] = '0'
			ii = 0
			hm = 0
			for ii in range(5):
				if LL[ii+1] == '1':
					hm = hm + 1
			ii = 0
			for ii in range(5):
				if LL[ii+1] == '1':
					data[ii] = 5 - hm
				else:
					data[ii] = hm
			# str_final = LL[0]
			ii = 0
			x_sum = 0
			for ii in range(5):
				x_sum = x_sum + data[ii]
			str_final = file_name1 + " " + LL[0] + " " + str(x_sum) + '\n'
	# print str_final
			# file2.write(str_final)
			# str_final = " ".join(LL) + "\n"
			# print str_final
			file6.write(str_final)
			LL = L2
			ii = 0
			for ii in range(15):
				if int(L2[ii+1]) > th2:
					LL[ii+1] = '1'
				else:
					LL[ii+1] = '0'
			ii = 0
			hm = 0
			for ii in range(15):
				if LL[ii+1] == '1':
					hm = hm + 1
			ii = 0
			for ii in range(15):
				if LL[ii+1] == '1':
					data[ii] = 15 - hm
				else:
					data[ii] = hm
			# str_final = LL[0]
			ii = 0
			x_sum = 0
			for ii in range(15):
				x_sum = x_sum + data[ii]
			str_final = file_name2 + " " + LL[0] + " " + str(x_sum) + '\n'
			# str_final = " ".join(LL) + "\n"
			# print str_final
			file7.write(str_final)
			LL = L3
			ii = 0
			for ii in range(10):
				if int(L3[ii+1]) > th3:
					LL[ii+1] = '1'
				else:
					LL[ii+1] = '0'
			ii = 0
			hm = 0
			for ii in range(10):
				if LL[ii+1] == '1':
					hm = hm + 1
			ii = 0
			for ii in range(10):
				if LL[ii+1] == '1':
					data[ii] = 10 - hm
				else:
					data[ii] = hm
			# str_final = LL[0]
			ii = 0
			x_sum = 0
			for ii in range(10):
				x_sum = x_sum + data[ii]
			str_final = file_name + " " + LL[0] + " " + str(x_sum) + '\n'
			# str_final = " ".join(LL) + "\n"
			# print str_final
			file8.write(str_final)
		file3.close()
		file4.close()
		file5.close()
		file6.close()
		file7.close()
		file8.close()


