#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据归一化处理 formal test 1
# written by MajestyLee 2017/4/2
import math
import numpy
for ic in range(23):
	for jc in range(6):
		file_name1 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/x_chr" + str(ic+2) + "_shannon" + str(jc+1) + ".txt"
		file_name2 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(ic+2) + "_shannon" + str(jc+1) + ".txt"
		file_name3 = "/Volumes/MajestyLee/graduation/chr_data/chr_df/or_chr" + str(ic+2) + "_m" + str(jc+1) + "_dif.txt"
		file_name4 = "/Volumes/MajestyLee/graduation/chr_data/chr_df/x_chr" + str(ic+2) + "_m" + str(jc+1) + "_dif.txt"
		file_name5 = "/Volumes/MajestyLee/graduation/chr_data/chr_df/mix_chr" + str(ic+2) + "_m" + str(jc+1) + "_dif.txt"
		file = open(file_name2)
		file1 = open(file_name1)
		file2 = open(file_name3,'w')
		file4 = open(file_name4,'w')
		file6 = open(file_name5,'w')
		while True:
			line = file.readline()
			line1 = file1.readline()
			if not line:
				break
			if not line1:
				break
			L = line.split()
			L1 = float(L[2])
			L2 = float(L[3])
			L3 = float(L[4])
			L4 = float(L[5])
			L5 = float(L[6])
			L6 = float(L[7])
			L7 = float(L[8])
			L8 = float(L[9])
			L9 = float(L[10])
			L10 = float(L[11])
			L11 = float(L[12])
			L12 = float(L[13])
			L13 = float(L[14])
			L14 = float(L[15])
			L15 = float(L[16])
			L_x_chr = line1.split()
			L16 = float(L_x_chr[2])
			L17 = float(L_x_chr[3])
			L18 = float(L_x_chr[4])
			L19 = float(L_x_chr[5])
			L20 = float(L_x_chr[6])
	# data=[L1,L2,L3,L4,L5,L6,L7,L8,L9,L10,L11,L12,L13,L14,L15,L16,L17,L18,L19,L20]
			data1 = [L16,L17,L18,L19,L20]
			data2 = [L1,L2,L3,L4,L5,L16,L17,L18,L19,L20]
			data3 = [L1,L2,L3,L4,L5,L6,L7,L8,L9,L10,L11,L12,L13,L14,L15]
			narray1=numpy.array(data1)
			narray2=numpy.array(data2)
			narray3=numpy.array(data3)
			sum11=narray1.sum()
			sum12=narray2.sum()
			sum13=narray3.sum()
			narray21=narray1*narray1
			narray22=narray2*narray2
			narray23=narray3*narray3
			sum21=narray21.sum()
			sum22=narray22.sum()
			sum23=narray23.sum()
			mean1=sum11/5
			mean2=sum12/10
			mean3=sum13/15
			var1=sum21/5-mean1**2
			var2=sum22/10-mean2**2
			var3=sum23/15-mean3**2
			if mean1 == 0:
				diff = 0
			else:
				diff = var1 / mean1
			str_final = "chr3 " + L[1] + " " + str(diff) + '\n'
			# print str_final
			file2.write(str_final)
			if mean2 == 0:
				diff = 0
			else:
				diff = var2 / mean2
			str_final = "chr3 " + L[1] + " " + str(diff) + '\n'
			# print str_final
			file4.write(str_final)
			if mean3 == 0:
				diff = 0
			else:
				diff = var3 / mean3
			str_final = "chr3 " + L[1] + " " + str(diff) + '\n'
			# print str_final
			file6.write(str_final)
		print file_name3
		file.close()
		file1.close()
		file2.close()
		file4.close()
		file6.close()