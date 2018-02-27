#!/usr/bin/python
# -*- coding: UTF-8 -*-
#对txt里的数据信息熵处理 formal test 1
# written by MajestyLee 2017/3/24
import math
# count = 0
for i in range(23):
	filename = "/Volumes/MajestyLee/graduation/chr_data/or_chr/result/or_chr" + str(i+2) + "_result.txt"
	file = open(filename)
	mm = [0.0,0.0,0.0,0.0,0.0,0.0]
	tt = [0.0,0.0,0.0,0.0,0.0,0.0]
	hh = [0.0,0.0,0.0,0.0,0.0,0.0]
	ss = [0.0,0.0,0.0,0.0,0.0,0.0]
	pp = [0.0,0.0,0.0,0.0,0.0,0.0]
	ormo = [[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0],[0.0,0.0,0.0,0.0,0.0,0.0]]
	filename1 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon1.txt"
	filename2 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon2.txt"
	filename3 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon3.txt"
	filename4 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon4.txt"
	filename5 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon5.txt"
	filename6 = "/Volumes/MajestyLee/graduation/chr_data/ch_shannon/or_chr" + str(i+2) + "_shannon6.txt"
	file_shannon1 = open(filename1,'w')
	file_shannon2 = open(filename2,'w')
	file_shannon3 = open(filename3,'w')
	file_shannon4 = open(filename4,'w')
	file_shannon5 = open(filename5,'w')
	file_shannon6 = open(filename6,'w')
	file_shannon = [file_shannon1,file_shannon2,file_shannon3,file_shannon4,file_shannon5,file_shannon6]
	line = file.readline()
	while True:
		line = file.readline()
		# count = count + 1
		# if count == 2:
		# 	break
		if not line:
			break
		L = line.split()
		summary = [0,0,0,0,0,0]
		L1 = L[2].split(',')	#mesen
		L2 = L[3].split(',')	#tropho
		L3 = L[4].split(',')	#h1cell
		L4 = L[5].split(',')	#stem
		L5 = L[6].split(',')	#progeni
		L6 = L[7].split(',')
		L7 = L[8].split(',')
		L8 = L[9].split(',')
		L9 = L[10].split(',')
		L10 = L[11].split(',')
		L11 = L[12].split(',')
		L12 = L[13].split(',')
		L13 = L[14].split(',')
		L14 = L[15].split(',')
		L15 = L[16].split(',')
		LL= [L1,L2,L3,L4,L5,L6,L7,L8,L9,L10,L11,L12,L13,L14,L15]
		ii = 0
		for ii in range(15):
			summary[0] += int(LL[ii][0][1:])
			# print LL[ii][0][1:]
		# print summary
		ii = 0
		jj = 0
		for ii in range(4):
			for jj in range(15):
				summary[ii+1] += int(LL[jj][ii+1])
		ii = 0
		for ii in range(15):
			summary[5] += int(LL[ii][5][:-1])
		if summary[0] == 0:
			ii = 0
			for ii in range(15):
				ormo[ii][0] = 0
		else:
			ii = 0
			# for ii in range(15):
			for ii in range(15):
				# ormo[ii][0] = ii
				ormo[ii][0] = math.asin((float(LL[ii][0][1:]) / summary[0]) ** 0.5)
				# print math.asin((float(LL[ii][0][1:]) / summary[0]) ** 0.5)
				# print ormo[0][0],ii
		# print ormo[0][0]
		ii = 0
		for ii in range(4):
			if summary[ii+1] == 0:
				jj = 0
				for jj in range(15):
					ormo[jj][ii+1] = 0
			else:
				jj = 0
				for jj in range(15):
					ormo[jj][ii+1] = math.asin((float(LL[jj][ii+1]) / summary[ii+1]) ** 0.5)
		if summary[5] == 0:
			ii = 0
			for ii in range(15):
				ormo[ii][5] = 0
		else:
			ii = 0
			for ii in range(15):
				ormo[ii][5] = math.asin((float(LL[ii][5][:-1]) / summary[5]) ** 0.5)
		ii = 0
		# print summary
		# print ormo[0][0]
		for ii in range(6):
			jj = 0
			str_shannon = L[0] + " " + L[1]
			for jj in range(15):
				str_shannon += " " + str(ormo[jj][ii])
			str_shannon += "\n"
			file_shannon[ii].write(str_shannon)
	file.close()
	print filename3
	for j in range(6):
		file_shannon[j].close()
