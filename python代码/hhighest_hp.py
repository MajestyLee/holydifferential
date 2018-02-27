#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据求区域
# written by MajestyLee 2017/4/5
import math
import numpy
ii = 0
jj = 0
kk = 0
temp_name = ["x_chr","or_chr","mix_chr"]
for ii in range(23):
	for jj in range(3):
		for kk in range(6):
			filename = "/Volumes/MajestyLee/graduation/chr_data/chr_hp/" + temp_name[jj] + str(ii+2) + "_m" + str(kk+1) + "_hp.txt"
			file = open(filename)
			temp = []
			count = 0
			while True:
				line = file.readline()
				if not line:
					break
				L = line.split()
				L1 = float(L[2])
				if L1 > 0.0:
					temp.append(L1)
					count = count + 1
			file.close()
			data_after = sorted(temp)
			print int(count / 10 * 9)
			data_high = data_after[int(count / 10 * 9)]
			file = open(filename)
			filename1 = "/Volumes/MajestyLee/graduation/chr_data/chr_high/" + temp_name[jj] + str(ii+2) + "_m" + str(kk+1) + "_hp_high.txt"
			file1 = open(filename1,'w')
			while True:
				line = file.readline()
				if not line:
					break
				L = line.split()
				L1 = float(L[2])
				if L1 >= data_high:
				# line1 = "chr3 " + line
				# print line1
					file1.write(line)
			file.close()
			file1.close()
			print filename1